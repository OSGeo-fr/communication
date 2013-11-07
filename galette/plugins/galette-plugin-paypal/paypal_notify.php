<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Paypal form
 *
 * This page can be loaded directly, or via ajax.
 * Via ajax, we do not have a full html page, but only
 * that will be displayed using javascript on another page
 *
 * PHP version 5
 *
 * Copyright © 2011-2013 The Galette Team
 *
 * This file is part of Galette (http://galette.tuxfamily.org).
 *
 * Galette is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Galette is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Galette. If not, see <http://www.gnu.org/licenses/>.
 *
 * @category  Plugins
 * @package   GalettePaypal
 * @author    Johan Cwiklinski <johan@x-tnd.be>
 * @copyright 2011-2013 The Galette Team
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GPL License 3.0 or (at your option) any later version
 * @version   SVN: $Id$
 * @link      http://galette.tuxfamily.org
 * @since     Available since 0.7dev - 2011-06-08
 */

use Analog\Analog as Analog;
use Galette\Entity\Contribution;
use Galette\Core\GaletteMail;

define('GALETTE_BASE_PATH', '../../');
require_once GALETTE_BASE_PATH . 'includes/galette.inc.php';

//Constants and classes from plugin
require_once '_config.inc.php';

//if we've received some informations from paypal website, we can proceed
require_once 'classes/paypal-history.class.php';
if ( isset($_POST) && isset($_POST['mc_gross'])
    && isset($_POST['item_number'])
) {
    $request = $_POST;

    if (isset($request['charset'])) {
        foreach ($request as $key => $value) {
            $request[$key] = iconv($request['charset'], 'UTF-8', $value);
        }
    }

    $ph = new PaypalHistory();
    $ph->add($request);

    Analog::log(
        'An entry has been added in paypal history',
        Analog::INFO
    );

    $s = null;
    foreach ( $request as $k=>$v ) {
        if ( $s != null ) {
            $s .= ' | ';
        }
        $s .= $k . '=' . $v;
    }

    Analog::log(
        $s,
        Analog::DEBUG
    );

    //are we working on a real contribution?
    $real_contrib = false;
    if ( isset($request['custom'])
        && is_numeric($request['custom'])
        && $request['payment_status'] == 'Completed'
    ) {
        $real_contrib = true;
    }

    //we'll now try to add the relevant cotisation
    if ( $request['payment_status'] == 'Completed' ) {
        /**
         * We will use the following parameters:
         * - mc_gross: the amount
         * - custom: member id
         * - item_number: contribution type id
         *
         * If no member id is provided, we only send to post contribution
         * script, Galette does not handle anonymous contributions
         */
        $args = array(
            'type'          => $request['item_number'],
            'adh'           => $request['custom'],
            'payment_type'  => Contribution::PAYMENT_PAYPAL
        );
        if ( $preferences->pref_membership_ext != '' ) {
            $args['ext'] = $preferences->pref_membership_ext;
        }
        $contrib = new Contribution($args);
        $contrib->amount = $request['mc_gross'];

        //all goes well, we can proceed
        if ( $contrib->isCotis() && $real_contrib ) {
            // Check that membership fees does not overlap
            $overlap = $contrib->checkOverlap();
            if ( $overlap !== true ) {
                if ( $overlap === false ) {
                    Analog::log(
                        'An eror occured checking overlaping fees :(',
                        Analog::ERROR
                    );
                } else {
                    //method directly return erro message
                    Analog::log(
                        'Error while calculating overlaping fees from paypal payment: ' . $overlap,
                        Analog::ERROR
                    );
                }
            }
        }

        if ( $real_contrib ) {
            $store = $contrib->store();
            if ( $store === true ) {
                //contribution has been stored :)
                Analog::log(
                    'Paypal payment has been successfully registered as a contribution',
                    Analog::INFO
                );
            } else {
                //something went wrong :'(
                Analog::log(
                    'An error occured while storing a new contribution from Paypal payment',
                    Analog::ERROR
                );
            }
        }

        //execute post contribution script, if any
        if ( $preferences->pref_new_contrib_script ) {
            $pp_infos = array();
            foreach ( $request as $k=>$v ) {
                $pp_infos['paypal_' . $k] = $v;
            }
            $es = new Galette\IO\ExternalScript($preferences);
            $res = $contrib->executePostScript($es, null, $pp_infos);

            if ( $res !== true ) {
                //send admin a mail with all details
                if ( $preferences->pref_mail_method > GaletteMail::METHOD_DISABLED ) {
                    $mail = new GaletteMail();
                    $mail->setSubject(
                        _T("Post contribution script failed")
                    );
                    /** TODO: only super-admin is contacted here. We should send
                    *  a message to all admins, or propose them a chekbox if
                    *  they don't want to get bored
                    */
                    $mail->setRecipients(
                        array(
                            $preferences->pref_email_newadh => str_replace(
                                '%asso',
                                $preferences->pref_name,
                                _T("%asso Galette's admin")
                            )
                        )
                    );

                    $message = _T("The configured post contribution script has failed.");
                    $message .= "\n" . _T("You can find contribution information and script output below.");
                    $message .= "\n\n";
                    $message .= $res;

                    $mail->setMessage($message);
                    $sent = $mail->send();

                    if ( !$sent ) {
                        $txt = preg_replace(
                            array('/%name/', '/%email/'),
                            array($adh->sname, $adh->email),
                            _T("A problem happened while sending to admin post contribution notification for user %name (%email) contribution")
                        );
                        $hist->add($txt);
                        $error_detected[] = $txt;
                        //Mails are disabled... We log (not safe, but)...
                        Analog::log(
                            'Post contribution script has failed. Here was the data: ' .
                            "\n" . print_r($res, true),
                            Analog::ERROR
                        );
                    }
                } else {
                    //Mails are disabled... We log (not safe, but)...
                    Analog::log(
                        'Post contribution script has failed. Here was the data: ' .
                        "\n" . print_r($res, true),
                        Analog::ERROR
                    );
                }
            }
        }
    } else {
        Analog::log(
            'A paypal payment notification has been received, but is not completed!',
            Analog::WARNING
        );
    }
} else {
    Analog::log(
        'Paypal notify URL call without required arguments!',
        Analog::WARNING
    );
}
?>
