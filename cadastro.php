<?php
require_once "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recolher dados do formulário
    $nome = $_POST['nome'];
    $dataNascimento = $_POST['data-nascimento'];
    $sexo = $_POST['sexo'];
    $tipoSanguineo = $_POST['tipo-sanguineo'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confSenha = $_POST['confsenha'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $medicamento = isset($_POST['medicamento']) ? $_POST['medicamento'] : "nao";
    $informacoesSaude = isset($_POST['informacoes-saude']) ? $_POST['informacoes-saude'] : "";
    $notificacoes = isset($_POST['notificacoes']) ? 1 : 0;

    // Verificar se a senha e a confirmação da senha correspondem
    if ($senha !== $confSenha) {
        echo "As senhas não correspondem. Por favor, tente novamente.";
    } else {
        // Hash da senha antes de salvar no banco de dados
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        // Preparar a instrução SQL para inserção
        $sql = "INSERT INTO cadastro (nome, data_nascimento, sexo, tipo_sanguineo, estado, cidade, telefone, cep, endereco, numero, email, senha, rg, cpf, toma_medicamento, informacoes_saude, receber_notificacoes) 
                VALUES ('$nome', '$dataNascimento', '$sexo', '$tipoSanguineo', '$estado', '$cidade', '$telefone', '$cep', '$endereco', '$numero', '$email', '$senhaHash', '$rg', '$cpf', '$medicamento', '$informacoesSaude', '$notificacoes')";

        // Executar a instrução SQL
        if ($conn->query($sql) === TRUE) {
            echo "Cadastro realizado com sucesso!";
            // Você pode redirecionar o usuário para a página de login ou qualquer outra página após o cadastro bem-sucedido
        } else {
            echo "Erro ao cadastrar: " . $conn->error;
        }
    }
    $conn->close();
}
?>
