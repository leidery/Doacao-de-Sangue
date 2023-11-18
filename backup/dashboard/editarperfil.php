<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icons/login.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" type="text/css" href="/public/css/index.css">
    <title>Editar Perfil</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand">Doador Online</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
            aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="material-symbols-outlined">
              bloodtype
            </span>
    
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link"  href="perfil.php">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" class="nav-link" href="editarperfil.php">Editar perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Sair</a>
                </li>
            </div>
          </div>
        </div>
      </nav>
      <br><br><br>

      <div class="container">
        <h1>Editar Perfil</h1>
        <form>
            <div class="mb-3">
                <label for="nomeCompleto" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nomeCompleto">
            </div>
            <div class="mb-3">
                <label for="genero" class="form-label">Gênero</label>
                <select class="form-select" id="genero">
                    <option selected disabled>selecione</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="dataNascimento">
            </div>
            <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
                <select class="form-select" id="estado">
                    <option selected disabled>selecione</option>
                    <option class="select-option" value="AC">Acre</option>
                    <option class="select-option" value="AL">Alagoas</option>
                    <option class="select-option" value="AP">Amapá</option>
                    <option class="select-option" value="AM">Amazonas</option>
                    <option class="select-option" value="BA">Bahia</option>
                    <option class="select-option" value="CE">Ceará</option>
                    <option class="select-option" value="DF">Distrito Federal</option>
                    <option class="select-option" value="ES">Espírito Santo</option>
                    <option class="select-option" value="GO">Goiás</option>
                    <option class="select-option" value="MA">Maranhão</option>
                    <option class="select-option" value="MT">Mato Grosso</option>
                    <option class="select-option" value="MS">Mato Grosso do Sul</option>
                    <option class="select-option" value="MG">Minas Gerais</option>
                    <option class="select-option" value="PA">Pará</option>
                    <option class="select-option" value="PB">Paraíba</option>
                    <option class="select-option" value="PR">Paraná</option>
                    <option class="select-option" value="PE">Pernambuco</option>
                    <option class="select-option" value="PI">Piauí</option>
                    <option class="select-option" value="RJ">Rio de Janeiro</option>
                    <option class="select-option" value="RN">Rio Grande do Norte</option>
                    <option class="select-option" value="RS">Rio Grande do Sul</option>
                    <option class="select-option" value="RO">Rondônia</option>
                    <option class="select-option" value="RR">Roraima</option>
                    <option class="select-option" value="SC">Santa Catarina</option>
                    <option class="select-option" value="SP">São Paulo</option>
                    <option class="select-option" value="SE">Sergipe</option>
                    <option class="select-option" value="TO">Tocantins</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade</label>
                <select class="form-select" id="cidade">
                    <option selected disabled>selecione</option>
                    <option value="Curitiba">Curitiba</option>
                    <option value="Londrina">Londrina</option>
                    <option value="Maringá">Maringá</option>
                    <option value="Ponta Grossa">Ponta Grossa</option>
                    <option value="Cascavel">Cascavel</option>
                    <option value="São José dos Pinhais">São José dos Pinhais</option>
                    <option value="Foz do Iguaçu">Foz do Iguaçu</option>
                    <option value="Colombo">Colombo</option>
                    <option value="Guarapuava">Guarapuava</option>
                    <option value="Paranaguá">Paranaguá</option>
                    <option value="Araucária">Araucária</option>
                    <option value="Toledo">Toledo</option>
                    <option value="Apucarana">Apucarana</option>
                    <option value="Pinhais">Pinhais</option>
                    <option value="Campo Largo">Campo Largo</option>
                    <option value="Arapongas">Arapongas</option>
                    <option value="Almirante Tamandaré">Almirante Tamandaré</option>
                    <option value="Umuarama">Umuarama</option>
                    <option value="Piraquara">Piraquara</option>
                    <option value="Cambé">Cambé</option>
                    <option value="Sarandi">Sarandi</option>
                    <option value="Marechal Cândido Rondon">Marechal Cândido Rondon</option>
                    <option value="Cianorte">Cianorte</option>
                    <option value="Campo Mourão">Campo Mourão</option>
                    <option value="Paranavaí">Paranavaí</option>
                    <option value="Fazenda Rio Grande">Fazenda Rio Grande</option>
                    <option value="Francisco Beltrão">Francisco Beltrão</option>
                    <option value="Pato Branco">Pato Branco</option>
                    <option value="Rio Branco do Sul">Rio Branco do Sul</option>
                    <option value="Carambeí">Carambeí</option>
                    <option value="Palmas">Palmas</option>
                    <option value="Jaguariaíva">Jaguariaíva</option>
                    <option value="Medianeira">Medianeira</option>
                    <option value="Terra Boa">Terra Boa</option>
                    <option value="Rolândia">Rolândia</option>
                    <option value="Dois Vizinhos">Dois Vizinhos</option>
                    <option value="Santa Helena">Santa Helena</option>
                    <option value="Ibiporã">Ibiporã</option>
                    <option value="Mandaguari">Mandaguari</option>
                    <option value="Irati">Irati</option>
                    <option value="Tijucas do Sul">Tijucas do Sul</option>
                    <option value="Lapa">Lapa</option>
                    <option value="Astorga">Astorga</option>
                    <option value="Telêmaco Borba">Telêmaco Borba</option>
                    <option value="Quatro Barras">Quatro Barras</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="rua" class="form-label">Rua </label>
                <input type="text" class="form-control" id="rua">
            </div>
            <div class="mb-3">
                <label for="numero" class="form-label">Número</label>
                <input type="text" class="form-control" id="numero">
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Número de Telefone</label>
                <input type="tel" class="form-control" id="telefone">
            </div>
            <div class="mb-3">
                <label for="tipoSanguineo" class="form-label">Tipo Sanguíneo</label>
                <select class="form-select" id="tipoSanguineo">
                    <option selected disabled>selecione</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Novo Email</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="senha1" class="form-label">Nova senha</label>
                <input type="password" class="form-control" id="senha1">
            </div>
            <div class="mb-3">
                <label for="senha2" class="form-label">Confirmar nova senha</label>
                <input type="password" class="form-control" id="senha2">
            </div>
            <div class="mb-3">
                <label for="rg" class="form-label">RG </label>
                <input type="text" class="form-control" id="rg">
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF </label>
                <input type="text" class="form-control" id="cpf">
            </div>
            <div class="mb-3">
                <label for="restricaoSaude" class="form-label">Medicamentos e restrições de saúde</label>
                <textarea class="form-control" id="restricaoSaude" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="disponibilidade" class="form-label">Disponibilidade para Doar Sangue</label>
                <input type="text" class="form-control" id="disponibilidade">
            </div>
            <div class="mb-3">
                <label for="ftperfil" class="form-label">Editar foto de perfil:</label><br>
                <input type="file">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="notificacoes">
                <label class="form-check-label" for="notificacoes">Desejo receber notificações sobre campanhas de doação</label>
            </div>
            <button type="submit" class="btn btn-danger" id="botperfil"><a href="perfil.php">Salvar Alterações</a></button>
        </form>
    </div>
    <br>

<footer class="footer">
    <p>&copy; Doação de Sangue</p>
    <P>Em caso de dúvidas, entre em contato com <a href="mailto:doadoronlineopet@gmail.com"><strong>este</strong></a> email</P>
    <p>doadoronlineopet@gmail.com</p>
</footer>

</body>
</html>
