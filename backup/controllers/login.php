<?php
require_once __DIR__ . "/config.php";
try {
    $stmt = $conn->prepare("INSERT INTO usuarios (name, email, password) VALUES (:name, :email, :password)");

    $nome = $_GET['name'];
    $setor = $_GET['email'];
    $custo = $_GET['password'];

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    $stmt->execute();
    $stmt->closeCursor();

} catch (PDOException $e) {
    echo "Erro ao salvar usuário: " . $e->getMessage();
}
?>