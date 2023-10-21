<?php

namespace Routing\Core\Response;
class TemplateResponse extends Response
{
    public function __construct( $path, $args = [])
    {
        if(!empty($args)){
            $sent = $args;
        } else {
            $sent = null;
        }
        if (file_exists($path)){
            require_once $path;
        }
    }
}
