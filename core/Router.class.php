<?php

class Router{
    
    public static function route(Request $request){
        
        $controller = $request->getController().'Controller';
        $method = $request->getMethod();
        $args = $request->getArgs();
        //$controllerFile = SITE_PATH.'controllers/'.$controller.'.php';  //***Because autoload
        //if(is_readable($controllerFile)){ //***Because autoload
            //require_once $controllerFile; //***Because autoload
            
            $controller = new $controller;
            $method = (is_callable(array($controller,$method))) ? $method : 'index';
            
            if(!empty($args)){
                //call_user_func_array(array($controller,$method),$args);
                if (extension_loaded('newrelic')) {
                  newrelic_name_transaction((string)$request->getController().'/'.(string)$method);
                }
                call_user_func(array($controller,$method),$args);
            }else{
                if (extension_loaded('newrelic')) {
                  newrelic_name_transaction((string)$request->getController().'/'.(string)$method);
                }
                call_user_func(array($controller,$method),NULL);
            }   
            return;
        //} //***Because autoload
        throw new Exception('404 - '.$request->getController().' not found');
    }
}

try{
    Router::route(new Request);
}catch(Exception $e){
    $controller = new errorController;
    $controller->error($e->getMessage());
}