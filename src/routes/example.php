<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\Controllers\ExampleController;

$app->group('/api/v1', function () {

    $this->post('/example', ExampleController::class . ':insertExample');
    $this->get('/example', ExampleController::class . ':getExample');
    
});

