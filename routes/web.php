<?php
use Routing\Core\Route;
use Routing\Core\Response\JsonResponse;
use \Routing\Core\Response\TemplateResponse;

$routes = new Route();

// Json examples

$routes->get('/get', function (){
    $response = new JsonResponse(['response' => 'success']);
    $response->return();
});

$routes->post('/post', function (){
    $response = new JsonResponse([
        'response' => 'post',
        'data' => $_POST
    ]);
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

// Template examples

$routes->get('/form', function (){
    $response = new TemplateResponse(__DIR__ . '/../templates/form.html');
});

$routes->get('/card', function (){
    $response = new TemplateResponse(__DIR__ . '/../templates/card.php', [
        'header' => "it's header",
        'body' => 'Lorem ipsum',
        'cta' => 'Click'
    ]);
});
