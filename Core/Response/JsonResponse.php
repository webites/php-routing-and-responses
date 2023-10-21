<?php

namespace Core\Response;
require_once "Response.php";
use Core\Response\Response;
class JsonResponse extends Response
{
    private string $headers = "Content-Type: application/json";
    private int $response_code = 200;
    private array $data = [];
    public function __construct($data, $response_code = 200)
    {
        $this->data = $data;
        $this->response_code = $response_code;
    }
    public function return()
    {
        header($this->headers, true, $this->response_code);
        echo json_encode($this->data);
    }
}
