<?php
    // Directory path:
    define('SITE_ROOT', __DIR__);
        
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    // Connecting database && error handling:
    try {
        $servername = "localhost"; 
        $username = "root"; 
        $password = ""; 
        $dbname = "doacao"; 

        // Adding charset=utf-8 because of the Unicode:
        $conn = new PDO('mysql:host='.$servername.';dbname='.$dbname.';charset=utf8', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
?>
