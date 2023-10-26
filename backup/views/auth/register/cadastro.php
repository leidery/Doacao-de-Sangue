<?php

try {
    $stmt = $conn->prepare("INSERT INTO usuarios (nome, data_nascimento, sexo)
    VALUES (:nome, :data_nascimento, :sexo)");
    // $stmt = $conn->prepare("INSERT INTO usuarios (nome, data_nascimento, sexo,
    // tipo_sanguineo, telefone, cep, endereco, num_endereco, email, senha, rg, cpf, medicamento, info_saude, notificacao)
    // VALUES (:nome, :data_nascimento, :sexo, :tipo_sanguineo, :telefone, :cep, :endereco, :num_endereco, :email,
    // :senha, :rg, :cpf, :medicamento, :info_saude, :notificacao)");

    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $sexo = $_POST['sexo'];
    // $tipo_sanguineo = $_POST['tipo_sanguineo'];
    // $telefone = $_POST['telefone'];
    // $cep = $_POST['cep'];
    // $endereco = $_POST['endereco'];
    // $num_endereco = $_POST['num_endereco'];
    // $email = $_POST['email'];
    // $senha = $_POST['senha'];
    // $rg = $_POST['rg'];
    // $cpf = $_POST['cpf'];
    // $medicamento = $_POST['medicamento'];
    // $info_saude = $_POST['info_saude'];
    // $notificacao = $_POST['notificacao']; // Notificação por e-mail:

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':data_nascimento', $data_nascimento);
    $stmt->bindParam(':sexo', $sexo);
    // $stmt->bindParam(':tipo_sanguineo', $tipo_sanguineo);
    // $stmt->bindParam(':telefone', $telefone);
    // $stmt->bindParam(':cep', $cep);
    // $stmt->bindParam(':endereco', $endereco);
    // $stmt->bindParam(':num_endereco', $num_endereco);
    // $stmt->bindParam(':email', $email);
    // $stmt->bindParam(':senha', $senha);
    // $stmt->bindParam(':rg', $rg);
    // $stmt->bindParam(':cpf', $cpf);
    // $stmt->bindParam(':medicamento', $medicamento);
    // $stmt->bindParam(':info_saude', $info_saude);
    // $stmt->bindParam(':notificacao', $notificacao);

    $stmt->execute();
    $stmt->closeCursor();

} catch (PDOException $e) {
    echo "Erro ao salvar produto: " . $e->getMessage();
}

?>