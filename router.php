<?php

class Router{

    public function getRequest(){
        $request = $_SERVER['REQUEST_URI'];
        $requestArray = explode('/', $request);

        $controllerName = ($requestArray[1]) ? $requestArray[1] . 'Controller' : 'indexController';
        $action = ($requestArray[2]) ? $requestArray[2]  : 'default';
        $param = ($requestArray[3]) ? $requestArray[3] : 0;
        
        //if page doesnt exits then 404 controller
        if (!file_exists(ROOT . 'controllers/' . $controllerName . '.php')){
            $controllerName = 'notfoundController';
        }

        require(ROOT . 'controllers/' . $controllerName . '.php');
        $controller = new $controllerName();
        $controller->$action($param);
    }

}
