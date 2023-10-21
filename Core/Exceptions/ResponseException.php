<?php

namespace Core\Exceptions;

use Core\Response\JsonResponse;

class ResponseException extends \Exception
{
    public function getMessageJson()
    {
        $response =  new JsonResponse(['message' => parent::getMessage(), 'code' => parent::getCode()], parent::getCode());
        $response->return();
    }

}
