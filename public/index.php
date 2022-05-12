<?php

declare(strict_types = 1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Router;
use App\Handler\Test;
$router = new Router();

$router->get('/', function(){
    echo "Home page";
});



$router->get('/test', Test::class . '::execute');

$router->get('/about', function(){
    echo "about page";
});

$router->get('/find', Test::class . '::executeGetWithParameters');
$router->get('/register', Test::class . '::register');
$router->post('/register', Test::class . '::sendRequest');

$router->addNotFoundHandler(function(){
    echo "Not found";
});
$router->run();