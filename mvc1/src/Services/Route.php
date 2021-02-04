<?php
namespace Services;
use \View\View;
class Route{

    public static function start(){
        $url= $_GET['url'] ?? '/';
        $routes = require __DIR__.'/../routes.php';
            if (!isset($routes[$url])) {
                die('Page not');
            }
            list($controllerName, $methodName) = explode('@',$routes[$url]);
            
            $controllerPath = 'Controllers\\'.$controllerName; 
            if(!file_exists('src/'.$controllerPath.'.php')){
                die('Controllers not');
            }

            $controller = new $controllerPath();
            if(!method_exists($controller, $methodName)){
                die('Method not');
            }
            $controller -> $methodName();

    }
}







