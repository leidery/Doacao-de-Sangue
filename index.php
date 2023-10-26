<?php

require __DIR__.'/vendor/autoload.php';

use \App\Http\Router;
use \App\Controller\Pages\Home;

define('URL', 'http://localhost/Doacao-de-Sangue');

$obRouter = new Router(URL);

include __DIR__.'/routes/pages.php';

// response na rota:
$obRouter->run()->sendResponse();