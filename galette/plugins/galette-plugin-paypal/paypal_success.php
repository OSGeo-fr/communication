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

define('GALETTE_BASE_PATH', '../../');
require_once GALETTE_BASE_PATH . 'includes/galette.inc.php';

//Constants and classes from plugin
require_once '_config.inc.php';

//Set the path to the current plugin's templates,
//but backup main Galette's template path before
$orig_template_path = $tpl->template_dir;
$tpl->template_dir = 'templates/' . $preferences->pref_theme;
$tpl->compile_id = PAYPAL_SMARTY_PREFIX;

$request = $_POST;
if (isset($request['charset'])) {
    foreach ($request as $key => $value) {
        $request[$key] = iconv($request['charset'], 'UTF-8', $value);
    }
}

$tpl->assign('post', $request);
$content = $tpl->fetch('paypal_success.tpl', PAYPAL_SMARTY_PREFIX);
$tpl->assign('content', $content);
//Set path back to main Galette's template
$tpl->template_dir = $orig_template_path;
$tpl->display('page.tpl', PAYPAL_SMARTY_PREFIX);
/*print_r($request);
Array
(
    [mc_gross] => 10.00
    [protection_eligibility] => Ineligible
    [payer_id] => 9EQBXB6VP6TQS
    [tax] => 0.00
    [payment_date] => 14:53:16 Jun 08, 2011 PDT
    [payment_status] => Pending
    [charset] => windows-1252
    [first_name] => Test
    [mc_fee] => 0.64
    [notify_version] => 3.1
    [custom] =>
    [payer_status] => verified
    [business] => asso_1307082004_biz@x-tnd.be
    [quantity] => 1
    [payer_email] => member_1307082133_per@x-tnd.be
    [verify_sign] => AGpFW7lEeJ4C3fJFmc0C7AHLr-I2AOJDPv4h16f.LTWzTPmEMGaw-Z.K
    [txn_id] => 37S45593SX696710D
    [payment_type] => instant
    [last_name] => User
    [receiver_email] => asso_1307082004_biz@x-tnd.be
    [payment_fee] =>
    [receiver_id] => 7ZPFDK9375A6C
    [pending_reason] => paymentreview
    [txn_type] => web_accept
    [item_name] => cotisation annuelle réduite
    [mc_currency] => EUR
    [item_number] =>
    [residence_country] => US
    [test_ipn] => 1
    [handling_amount] => 0.00
    [transaction_subject] => cotisation annuelle réduite
    [payment_gross] =>
    [shipping] => 0.00
    [merchant_return_link] => Go back to %s Website to complete your inscription. (not tra
)
*/
?>
