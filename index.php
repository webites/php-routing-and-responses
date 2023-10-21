<?php
require_once "routes/web.php";
require_once "Core/Route.php";

try {
    $route = new \Core\Route();
    $route->serve($routes);
} catch (\Core\Exceptions\ResponseException $exception){
//    header('Content-Type: application/json', true, $exception->getCode());
     $exception->getMessageJson();
}

