<?php
require_once "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $nome_cad = test_input($_POST['nome_cad']);
    $dataNascimento = test_input($_POST['data_nascimento']);
    $sexo = test_input($_POST['sexo']);
    $tipoSanguineo = test_input($_POST['tipo_sanguineo']);
    $estado = test_input($_POST['estado']);
    $cidade = test_input($_POST['cidade']);
    $telefone = test_input($_POST['telefone']);
    $cep = test_input($_POST['cep']);
    $endereco = test_input($_POST['endereco']);
    $numero = test_input($_POST['num_endereco']);
    $email = test_input($_POST['email']);
    $senha = test_input($_POST['senha']);
    $confSenha = test_input($_POST['confsenha']);
    $rg = test_input($_POST['rg']);
    $cpf = test_input($_POST['cpf']);
    $medicamento = isset($_POST['medicamento']) ? test_input($_POST['medicamento']) : "nao";
    $informacoesSaude = isset($_POST['info_saude']) ? test_input($_POST['info_saude']) : "";
    $notificacoes = isset($_POST['notificacao']) ? 1 : 0;

    
    if ($senha !== $confSenha) {
        echo "As senhas não correspondem. Por favor, tente novamente.";
    } else {
        
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        
        $stmt = $conn->prepare("INSERT INTO cadastro (nome_cad, data_nascimento, sexo, tipo_sanguineo, estado, cidade, telefone, cep, endereco, num_endereco, email, senha, rg, cpf, medicamento, info_saude, notificacao) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        
        if ($stmt) {
            
            $stmt->bind_param("ssssssssssssssssi", $nome_cad, $dataNascimento, $sexo, $tipoSanguineo, $estado, $cidade, $telefone, $cep, $endereco, $numero, $email, $senhaHash, $rg, $cpf, $medicamento, $informacoesSaude, $notificacoes);

            
            if ($stmt->execute()) {
                
                
                header("Location: login.php");
                exit();
            } else {
                echo "Erro ao cadastrar: " . $stmt->error;
            }

            
            $stmt->close();
        } else {
            echo "Erro na preparação da consulta.";
        }
    }

    // Fechar a conexão
    $conn->close();
}
?>
