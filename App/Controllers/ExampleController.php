<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class ExampleController
{
    
    public function insertExample(Request $request, Response $response)
    {

        return $response->withJson(['message'=>"Example Controller POST"]);
    }

    public function getExample(Request $request, Response $response)
    {

        return $response->withJson(['message'=>"Example Controller GET"]);
    }
}