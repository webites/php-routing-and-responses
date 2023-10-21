<?php

namespace Routing\Core\Exceptions;

use Routing\Core\Response\JsonResponse;

class ResponseException extends \Exception
{
    public function getMessageJson()
    {
        $response =  new JsonResponse(['message' => parent::getMessage(), 'code' => parent::getCode()], parent::getCode());
        $response->return();
    }

}
