<?php
namespace Services;

use \View\View;

class Route{
    public static function start(){
        $url= $_GET['url'] ?? '/';
        $routes = require __DIR__.'/../routes.php';
        try {
            if (!isset($routes[$url])) {
                throw new \Exceptions\NotFoundException();
            }
            list($controllerName, $methodName) = explode('@',$routes[$url]); //PageController@index
            $controllerPath = 'Controllers\\'.$controllerName; 
            if(!file_exists('src/'.$controllerPath.'.php')){
                throw new \Exceptions\AppException('Controller not found');
            }
            $controller = new $controllerPath();
            if(!method_exists($controller, $methodName)){
                throw new \Exceptions\AppException('Method not found');
            }
            $controller -> $methodName();
        }catch (\Exceptions\NotFoundException $e){
            View::render('errors/404',[],404);
        } catch (\Exceptions\AppException $e){
            View::render('errors/500',['error'=>$e->getMessage()],500);
        }catch (\Exceptions\DbException $e){
            View::render('errors/500',['error'=>$e->getMessage()],500);
        }
    }
}







