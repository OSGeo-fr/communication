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
 * @since     Available since 0.7dev - 2011-06-05
 */

define('GALETTE_BASE_PATH', '../../');
require_once GALETTE_BASE_PATH . 'includes/galette.inc.php';

if ( !$login->isLogged() ) {
    header('location: ' . GALETTE_BASE_PATH . 'index.php');
    die();
}
if ( !$login->isAdmin() && !$login->isStaff() ) {
    header('location: ' . GALETTE_BASE_PATH . 'voir_adherent.php');
    die();
}

//Constants and classes from plugin
require_once '_config.inc.php';
require_once 'classes/paypal-history.class.php';

$paypal_history = new PaypalHistory();

if ( isset($_GET['reset']) && $_GET['reset'] == 1 ) {
    $paypal_history->clean();
    //reinitialize object after flush
    $paypal_history = new History();
}

if ( isset($_GET['page']) && is_numeric($_GET['page']) ) {
    $paypal_history->current_page = (int)$_GET['page'];
}

if ( isset($_GET['nbshow']) && is_numeric($_GET['nbshow'])) {
    $paypal_history->show = $_GET['nbshow'];
}

if ( isset($_GET['tri']) ) {
    $paypal_history->tri = $_GET['tri'];
}

$_SESSION['galette'][PREFIX_DB . '_' . NAME_DB]['paypal_history'] = serialize($paypal_history);

//assign pagination variables to the template and add pagination links
$logs = $paypal_history->getPaypalHistory();
$paypal_history->setSmartyPagination($tpl);

//Set the path to the current plugin's templates,
//but backup main Galette's template path before
$orig_template_path = $tpl->template_dir;
$tpl->template_dir = 'templates/' . $preferences->pref_theme;
$tpl->compile_id = PAYPAL_SMARTY_PREFIX;

$tpl->assign('page_title', _T("Paypal History"));

$tpl->assign('paypal_history', $paypal_history);
$tpl->assign('logs', $logs);
$content = $tpl->fetch('paypal_history.tpl', PAYPAL_SMARTY_PREFIX);
$tpl->assign('content', $content);
//Set path back to main Galette's template
$tpl->template_dir = $orig_template_path;
$tpl->display('page.tpl', PAYPAL_SMARTY_PREFIX);

?>
