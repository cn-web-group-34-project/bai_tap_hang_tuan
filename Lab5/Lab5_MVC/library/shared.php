<?php
/** Main Call Function **/
function callHook() {
    global $url;
    $urlArray = array();
    $urlArray = explode("/",$url);

    $controller = $urlArray[0]; 
    array_shift($urlArray);
    $action = $urlArray[0]; 
    array_shift($urlArray);
    $queryString = $urlArray; 
    
    $controllerName = $controller;
    $controller = ucwords($controller); 
    $model = rtrim($controller, 's'); 
    $controller .= 'Controller'; 
    $dispatch = new $controller($model,$controllerName,$action); 
    if ((int)method_exists($controller, $action)) {
        call_user_func_array(array($dispatch,$action),$queryString);
    } else {
        echo "callHook() failed";
    }
}

/** Autoload any classes that are required **/
spl_autoload_register(function ($className) {
    if (file_exists(ROOT . DS . 'library' . DS . strtolower($className) . '.class.php')) {
        require_once(ROOT . DS . 'library' . DS . strtolower($className) . '.class.php');
    } else if (file_exists(ROOT . DS . 'application' . DS . 'controllers' . DS . strtolower($className) . '.php')) {
        require_once(ROOT . DS . 'application' . DS . 'controllers' . DS . strtolower($className) . '.php');
    } else if (file_exists(ROOT . DS . 'application' . DS . 'models' . DS . strtolower($className) . '.php')) {
        require_once(ROOT . DS . 'application' . DS . 'models' . DS . strtolower($className) . '.php');
    } else {
        echo "spl_autoload_register() failed";
    }
});

callHook();