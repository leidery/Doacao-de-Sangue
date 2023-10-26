<?php
    $pageTitle = "Página Inicial";
    $content = file_get_contents(__DIR__ . '/content.php');

    include DASHBOARD_LAYOUT.'/index.php';
?>