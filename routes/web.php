<?php
require_once "Core/Route.php";
require_once "Core/Response/JsonResponse.php";
$routes = new \Core\Route();

$routes->get('/get', function (){
    $response = new \Core\Response\JsonResponse(['response' => 'success']);
    $response->return();
});

$routes->post('/post', function (){
    $response = new \Core\Response\JsonResponse(['response' => 'post']);
    $response->return();
});

$routes->put('/put', function (){
    $response = new \Core\Response\JsonResponse(['response' => 'put']);
    $response->return();
});

$routes->any('/any', function (){
    $response = new \Core\Response\JsonResponse(['response' => 'any']);
    $response->return();
});
