<div class="wrapper">
    <div class="container" id="cadastro">
        <form action="./cadastro.php" method="post">
            <h1>Cadastre-se</h1>

            <!-- Dados Pessoais -->
            <fieldset>
                <legend>Dados Pessoais</legend>
                <div class="mb-3">
                    <label for="nome_cad" class="form-label">Nome Completo:</label>
                    <input
                        type="text"
                        class="form-control"
                        name="nome_cad"
                        id="nome_cad"
                        placeholder="Digite seu nome"
                        required
                    />
                </div>

                <div class="mb-3">
                    <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
                    <input
                        type="date"
                        class="form-control"
                        name="data_nascimento"
                        id="data_nascimento"
                        placeholder="dd/mm/aaa"
                        required
                    />
                </div>

                <div class="mb-3">
                    <label>Sexo:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="masculino" name="sexo" id="sexo_masculino">
                        <label class="form-check-label" for="data_nascimento">
                            Masculino
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="feminino" name="sexo" id="sexo_feminino">
                        <label class="form-check-label" for="data_nascimento">
                            Feminino
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="outros" name="sexo" id="outros">
                        <label class="form-check-label" for="outros">
                            Outros
                        </label>
                    </div>
                </div>

                <div class="select-container mb-2">
                    <fieldset>
                        <label for="tipo_sanguineo">Tipo Sanguíneo:</label>
                        <select
                            id="tipo_sanguineo"
                            name="tipo_sanguineo"
                            class="form-select" aria-label="Selecione uma opção"
                            required
                        >
                            <option selected disabled>Selecione uma opção</option>
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

                <div class="mb-3">
                    <label for="rg" class="form-label">RG:</label>
                    <input
                        type="date"
                        class="form-control"
                        name="rg"
                        id="rg"
                        required
                    />
                </div>

                <div class="mb-3">
                    <label for="rg" class="form-label">CPF:</label>
                    <input
                        type="date"
                        class="form-control"
                        name="cpf"
                        id="cpf"
                        required
                    />
                </div>

                <div class="mb-3">
                    <label>Toma algum medicamento?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="sim" name="medicamento" />
                        <label class="form-check-label" for="data_nascimento">
                            Sim
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="nao" name="medicamento" />
                        <label class="form-check-label" for="data_nascimento">
                            Não
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Quais?</label>
                    <textarea class="form-control" id="info_saude" rows="3"></textarea>
                </div>
            </fieldset>

            <!-- Contato -->
            <fieldset>
                <legend>Contato</legend>
                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone:</label>
                    <input
                        type="tel"
                        class="form-control"
                        name="telefone"
                        id="telefone"
                        pattern="([0-9]{2})[0-9]{4}-[0-9]{4}"
                        placeholder="(00) 0000-0000"
                        required
                    />
                </div>
            </fieldset>

            <!-- Endereço -->
            <fieldset>
                <legend>Endereço</legend>
                <div class="mb-3">
                    <label for="cep" class="form-label">CEP:</label>
                    <input
                        type="text"
                        class="form-control"
                        name="cep"
                        id="cep"
                        required
                    />
                </div>

                <div class="mb-3">
                    <label for="cep" class="form-label">Rua:</label>
                    <input
                        type="text"
                        class="form-control"
                        name="endereco"
                        id="endereco"
                        required
                    />
                </div>

                <div class="mb-3">
                    <label for="cep" class="form-label">Número:</label>
                    <input
                        type="text"
                        class="form-control"
                        name="num_endereco"
                        id="num_endereco"
                        required
                    />
                </div>
            </fieldset>

            <!-- Login -->
            <fieldset>
                <legend>Informações de Login</legend>
                <div class="mb-3">
                    <label for="rg" class="form-label">E-mail:</label>
                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        id="email"
                        placeholder="seu_email@email.com"
                        required
                    />
                </div>

                <div class="mb-3">
                    <label for="senha" class="form-label">Senha:</label>
                    <input
                        type="text"
                        class="form-control"
                        name="senha"
                        id="senha"
                        placeholder="Digite sua senha"
                        required
                    />
                </div>

                <div class="mb-3">
                    <label for="confsenha" class="form-label">Confirmar senha:</label>
                    <input
                        type="text"
                        class="form-control"
                        name="confsenha"
                        id="confsenha"
                        placeholder="Confirme sua senha"
                        required
                    />
                </div>
            </fieldset>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="notificacao">
                <label class="form-check-label" for="notificacao">Deseja receber notificações via e-mail?</label>
            </div>

            <button
                id="botao-cadastro"
                name="enviar_cad"
                type="submit"
                class="btn btn-danger"
                style="margin-bottom: 20px;"
            >
                    Enviar
            </button>
        </form>
    </div>
</div>