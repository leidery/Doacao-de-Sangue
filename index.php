<?php

require __DIR__.'/vendor/autoload.php';

use \App\Http\Router;
use \App\Http\Response;
use \App\Controller\Pages\Home;

define('URL', 'http://localhost/Doacao-de-Sangue');

$ob_router = new Router(URL);
$ob_router->get('/', [
    function(){
        return new Response(200, Home::getHome());
    }
]);

// response na rota:
$ob_router->run()->sendResponse();