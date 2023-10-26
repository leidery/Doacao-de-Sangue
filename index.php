<?php
    // Global paths:
    define('SITE_ROOT', __DIR__);
    define('PUBLIC_ASSETS', __DIR__.'/public');
    define('WEBSITE_LAYOUT', __DIR__.'/views/website/layout');
    define('WEBSITE_PAGES', __DIR__.'/views/website/pages');

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