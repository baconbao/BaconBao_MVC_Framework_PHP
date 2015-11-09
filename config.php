<?php

define('SITE_PATH', realpath(dirname(__FILE__)).'/');
define('SUB_PATH', ''); //Ex. If homepath is http://example.com/love/you, you can set 'love/you/' in here to fix router.
define('SITE_HOMEURL', '//'.$_SERVER['SERVER_NAME']);

define('DB_SERVER','localhost');
define('DB_USERNAME','USERNAME');
define('DB_PASSWORD','PASSWORD');
define('DB_TABLENAME','DB_TABLE');

define('VIEWS_PATH', SITE_PATH.'application/views');
