<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "doacao"; 

$conn  = new mysqli($servername, $username, $password, $dbname);

// Verifica se houve algum erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
