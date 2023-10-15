<?php 
  session_start();
  require_once "conn.php";
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM login  WHERE email = ? AND email = ?";
  }
    $stmt = $conn-> prepare($sql);
    $stmt ->bind_param("ss", $email, $senha);
    $stmt -> execute();

    $result = $stmt-> get_result();

    if($result->num_rows===1){ //verificar registros
      $row - $result-> fetch_assoc(); //armazena
      if(password_verify($senha, $row['senha'])){
        $_SESSION['loggedin']= true; //indica q o user foi autenticado
        header("Location: perfil.html");
        exit;
      }
    }
  
  else{
    $error = "Usuário ou senha incorretos";
  }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icons/login.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login</title>
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
              <a class="nav-link" aria-current="page" href="index.html">Página Inicial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadastrar.php">Cadastre-se</a>
            </li>
        </div>
      </div>
    </div>
  </nav>
  <br><br><br>
<div class="wrapper-login">
  <div class="container" id="login">
    <form action="login.php" method = "post">
      <h1>Login</h1>

      <fieldset>
        <legend for="exampleInputEmail1">E-mail</legend>
        <input type="email" id="exampleInputEmail1" class="input-only-text"name = "email" required>
        <br>
      </fieldset>
      
      <fieldset>
        <legend for="exampleInputPassword1">Senha</legend>
        <input type="password" id="exampleInputPassword1" class="input-only-text" name = "senha" required>
      </fieldset>
      
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Lembrar-me</label>
      </div>
      <button type="submit" class="btn btn-danger" style="margin-bottom: 20px;" id="botao-login" name="submit_log" value="logar"><a href="perfil.html">Entrar</a></button>
      <br>
      <a href="esquecisenha.html" id="link-senha">Esqueceu sua senha?</a>
    </form>
  </div>
</div>
  
   <footer class="footer">
    <p>&copy; Doação de Sangue</p>
    <P>Em caso de dúvidas, entre em contato com <a href="mailto:doadoronlineopet@gmail.com"><strong>este</strong></a> email</P>
    <p>doadoronlineopet@gmail.com</p>
    </footer>
</body>
</html>