<?php
global $routes;
require_once "vendor/autoload.php";
require_once "routes/web.php";
use \Routing\Core\Route;
use \Routing\Core\Exceptions\ResponseException;

try {
    $route = new Route;
    $route->serve($routes);
} catch (ResponseException $exception){
     $exception->getMessageJson();
}

