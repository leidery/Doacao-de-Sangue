<?php
    // Global paths:
    define('SITE_ROOT', __DIR__);
    define('WEBSITE_LAYOUT', __DIR__.'/views/website/layout');

    // Routes settings:
    include 'routes/index.php';
    $currentRoute = $_SERVER['REQUEST_URI'];

    if (isset($routes[$currentRoute])) {
        include $routes[$currentRoute];
    } else {
        // Handle 404 Not Found
        include 'views/errors/404.php';
    }

    // TODO: Database settings here
?>