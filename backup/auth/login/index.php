<?php
    $pageTitle = "Login";
    $content = file_get_contents(__DIR__ . '/form.php');

    include AUTH_LAYOUT.'/index.php';
?>