<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="icons/cadastro.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Cadastro</title>
</head>
<body>
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand">Doador Online</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="material-symbols-outlined">
          bloodtype
      </span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link e" aria-current="page" href="index.html">Página Inicial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="cadastrar.php">Cadastre-se</a>
            </li>
        </div>
      </div>
    </div>
  </nav>
  <br><br><br>
  <div class="wrapper">
  <div class="container" id="cadastro">
    <form action="cadastro.php" method="post">
      <h1>Cadastre-se</h1>
      <fieldset>
        <legend for="nome_cad">Nome Completo: </legend>
        <input type="text" id="nome_cad" name="nome_cad" class="input-only-text" required><br>
      </fieldset>

      <fieldset>
        <legend for="data_nascimento">Data de Nascimento: </legend>
        <input type="date" id="data_nascimento" name="data_nascimento" class="input-only-text" required>
      </fieldset>

      <div class="diverse-options">
        <label for="sexo">Sexo: </label>
        <input type="radio" id="sexo_masculino" name="sexo" value="masculino" required>
        <label for="sexo_masculino">Masculino</label>
        <input type="radio" id="sexo_feminino" name="sexo" value="feminino">
        <label for="sexo_feminino">Feminino</label>
        <input type="radio" id="outros" name="sexo" value="outros">
        <label for="outros">Outros</label><br>
      </div>

      <div class="select-container">
        <fieldset>
          <legend for="tipo_sanguineo">Tipo Sanguíneo:</legend>
          <select id="tipo_sanguineo" name="tipo_sanguineo" required>
            <option selected disabled>selecione</option>
            <option class="select-option" value="Desconhecido">Desconhecido</option>
            <option class="select-option" value="O+">O+</option>
            <option class="select-option" value="O-">O-</option>
            <option class="select-option" value="A+">A+</option>
            <option class="select-option" value="A-">A-</option>
            <option class="select-option" value="B+">B+</option>
            <option class="select-option" value="B-">B-</option>
            <option class="select-option" value="AB+">AB+</option>
            <option class="select-option" value="AB-">AB-</option>
          </select>
        </fieldset>
      </div>

      <fieldset>
        <legend for="telefone">Telefone: </legend>
        <input type="tel" id="telefone" name="telefone" class="input-only-text" placeholder="(00) 0000-0000" required>
      </fieldset>

      <fieldset>
        <legend for="cep">CEP:</legend>
        <input type="text" id="cep" name="cep" required class="input-only-text">
      </fieldset>

      <fieldset>
        <legend for="endereco">Rua:</legend>
        <input type="text" id="endereco" name="endereco" required class="input-only-text">
      </fieldset>

      <fieldset>
        <legend for="num_endereco">Número:</legend>
        <input type="text" id="num_endereco" name="num_endereco" required class="input-only-text">
      </fieldset>

      <fieldset>
        <legend for="email">E-mail: </legend>
        <input type="email" id="email" name="email" class="input-only-text" required>
      </fieldset>

      <fieldset>
        <legend for="senha">Senha: </legend>
        <input type="password" id="senha" name="senha" class="input-only-text" required>
      </fieldset>

      <fieldset>
        <legend for="confsenha">Confirmar senha: </legend>
        <input type="password" id="confsenha" name="confsenha" class="input-only-text" required>
      </fieldset>

      <fieldset>
        <legend for="rg">RG: </legend>
        <input type="text" id="rg" name="rg" class="input-only-text" required>
      </fieldset>

      <fieldset>
        <legend for="cpf">CPF: </legend>
        <input type="text" id="cpf" name="cpf" class="input-only-text" required>
      </fieldset>

      <div class="diverse-options">
        <label for="medicamento">Toma algum medicamento?: </label>
        <input type="radio" id="medicamento-s" name="medicamento" value="sim">
        <label for="medicamento-s">Sim</label>
        <input type="radio" id="medicamento-n" name="medicamento" value="nao">
        <label for="medicamento-n">Não</label><br>
      </div>

      <div class="diverse-options">
        <label for="info_saude">Quais?: </label>
        <br>
        <textarea id="info_saude" name="info_saude"></textarea><br>
      </div>

      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="notificacao">
        <label class="form-check-label" for="notificacao">Deseja receber notificações via e-mail?</label>
      </div>

      <button class="btn btn-danger" id="botao-cadastro" style="margin-bottom: 20px;" type="submit" name="enviar_cad">Enviar</button>

    </form>
  </div>
</div>

</body>
<footer class="footer">
  <p>&copy; Doação de Sangue</p>
    <P>Em caso de dúvidas, entre em contato com <a href="mailto:doadoronlineopet@gmail.com"><strong>este</strong></a> email</P>
    <p>doadoronlineopet@gmail.com</p>
</footer>
</html>