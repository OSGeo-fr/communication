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
 * @version   SVN: $Id: owners.php 556 2009-03-13 06:48:49Z trashy $
 * @link      http://galette.tuxfamily.org
 * @since     Available since 0.7dev - 2011-06-02
 */

define('GALETTE_BASE_PATH', '../../');
require_once GALETTE_BASE_PATH . 'includes/galette.inc.php';

//Constants and classes from plugin
require_once '_config.inc.php';
require_once 'classes/paypal.class.php';

$paypal = new Paypal();

//Set the path to the current plugin's templates,
//but backup main Galette's template path before
$orig_template_path = $tpl->template_dir;
$tpl->template_dir = 'templates/' . $preferences->pref_theme;
$tpl->compile_id = PAYPAL_SMARTY_PREFIX;
$tpl->assign('paypal', $paypal);
$tpl->assign('amounts', $paypal->getAmounts());
//set util paths
$plugin_dir = basename(dirname($_SERVER['SCRIPT_NAME']));
$tpl->assign(
    'galette_url',
    'http://' . $_SERVER['HTTP_HOST'] .
    preg_replace(
        "/\/plugins\/" . $plugin_dir . '/',
        "/",
        dirname($_SERVER['SCRIPT_NAME'])
    )
);
$tpl->assign(
    'plugin_url',
    'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']) . '/'
);
if ( $login->isLogged() && !$login->isSuperAdmin() ) {
    $tpl->assign('custom', $login->id);
}
$tpl->assign('page_title', _T("Paypal payment"));
$content = $tpl->fetch('paypal_form.tpl', PAYPAL_SMARTY_PREFIX);
$tpl->assign('content', $content);
//Set path back to main Galette's template
$tpl->template_dir = $orig_template_path;
if ( !$login->isLogged() ) {
    $tpl->display('public_page.tpl', PAYPAL_SMARTY_PREFIX);
} else {
    $tpl->display('page.tpl', PAYPAL_SMARTY_PREFIX);
}
?>
