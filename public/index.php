<?php

// Подключение автозагрузки через composer
require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App;

$app->get('/', function ($request, $response) {
    return $response->write('GET /');
});

$app->get('/companies', function ($request, $response) {
    return $response->write('GET /companies');
});

$app->post('/companies', function ($request, $response) {
    return $response->write('POST /companies');
});

$app->run();