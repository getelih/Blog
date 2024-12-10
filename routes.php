<?php

use App\Router;


Routes::get('/', [PublicController::class, 'index'] );

Routes::get('/us', [PublicController::class, 'us']);

Routes::get('/tech', [PublicController::class, 'tech']);

Routes::get('/form', [PublicController::class, 'form']);

Routes::post('/answer', [PublicController::class, 'answer']);
?>