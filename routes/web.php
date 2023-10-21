<?php
use Routing\Core\Route;
use Routing\Core\Response\JsonResponse;

$routes = new Route();

$routes->get('/get', function (){
    $response = new JsonResponse(['response' => 'success']);
    $response->return();
});

$routes->post('/post', function (){
    $response = new JsonResponse(['response' => 'post']);
    $response->return();
});

$routes->put('/put', function (){
    $response = new JsonResponse(['response' => 'put']);
    $response->return();
});

$routes->any('/any', function (){
    $response = new JsonResponse(['response' => 'any']);
    $response->return();
});
