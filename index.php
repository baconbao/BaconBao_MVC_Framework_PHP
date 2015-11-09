<?php
	error_reporting(E_ALL & ~E_NOTICE);
	//error_reporting(E_ALL);
	ini_set('date.timezone','Asia/Taipei');
	ini_set('session.cookie_lifetime', 86400);
    require_once('config.php');
    require_once('autoload.php');
    require_once('core/Functions.php');
    require_once('core/Error.class.php');
    require_once('core/Request.class.php');
    require_once('core/Router.class.php');