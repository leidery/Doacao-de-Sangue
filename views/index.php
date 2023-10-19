<?php
    $pageTitle = "Página Inicial";
    $content = file_get_contents('./website/home.php');

    include './website/layout/index.php';
?>