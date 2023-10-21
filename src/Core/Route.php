<?php

namespace Routing\Core;

use Routing\Core\Exceptions\ResponseException;

class Route
{

    private array $routes = [];

    public function get( string $path, callable $function, $methods = 'get' ): array
    {
        return $this->routes[$path] = [
            'methods' => $methods,
            'callback' => $function
        ];
    }

    public function post( string $path, callable $function, $methods = 'post' ): array
    {
        return $this->routes[$path] = [
            'methods' => $methods,
            'callback' => $function
        ];
    }

    public function put( string $path, callable $function, $methods = 'put' ): array
    {
        return $this->routes[$path] = [
            'methods' => $methods,
            'callback' => $function
        ];
    }

    public function any( string $path, callable $function, $methods = 'any' ): array
    {
        return $this->routes[$path] = [
            'methods' => $methods,
            'callback' => $function
        ];
    }

    public function get_routes( $method = 'all' ): array
    {
        if($method === 'all'){
            return $this->routes;
        } else {
            return $this->routes;
        }
    }

    public function serve($routes){
        $method = $_SERVER['REQUEST_METHOD'];
        $current_path = $_SERVER['PATH_INFO'] ?? '/';
        $is_route = false;
        foreach ($routes->get_routes() as $path => $data){
            if($path === $current_path){
                if (strtoupper($data['methods']) == $method || $data['methods'] === 'any'){
                    $data['callback']();
                } else {
                    throw new ResponseException("Method Not Allowed", 405);
                }
                $is_route = true;
            }
        }
        if(!$is_route){
            throw new ResponseException("No route registered", 404);
        }
    }
}
