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