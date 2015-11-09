<?php

spl_autoload_register('core_autoload');
spl_autoload_register('models_autoload');
spl_autoload_register('controllers_autoload');


function core_autoload($class) {
    $cores = array('Controller', 'Model', 'Session', 'View');
    if (in_array($class, $cores)){
        if (file_exists(SITE_PATH.'core/'. $class .'.autoload.php')) {
            require_once SITE_PATH.'core/'. $class .'.autoload.php';
            return true;
        }
    }
}

function controllers_autoload($class) {
    if (file_exists(SITE_PATH.'application/controllers/'. $class .'.php')) {
        require_once SITE_PATH.'application/controllers/'. $class .'.php';
        return true;
    }
}

function models_autoload($class) {
    if (file_exists(SITE_PATH.'application/models/'. $class .'.php')) {
        require_once SITE_PATH.'application/models/'. $class .'.php';
        return true;
    }
}

