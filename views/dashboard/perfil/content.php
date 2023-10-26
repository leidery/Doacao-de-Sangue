

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <aside class="perfil-card">
                <div class="div-foto">
                    <img src="img/avatar.jpg" alt="Foto de Perfil" class="perfil-avatar">
                </div>
                <br>
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>Nome:</strong> Aline A. Bancks
                    </li>
                    <li class="list-group-item">
                        <strong>Tipo sanguíneo:</strong> A+
                    </li>
                    <li class="list-group-item">
                        <strong>Fator Rh:</strong> Positivo
                    </li>
                    <li class="list-group-item">
                        <strong>Idade:</strong> 19 anos
                    </li>
                    <li class="list-group-item">
                        <strong>Genero:</strong> Feminino
                    </li>
                    <li class="list-group-item">
                        <strong>Data de nascimento:</strong> 07/01/2004
                    </li>
                    <li class="list-group-item">
                        <strong>Doações realizadas:</strong> 5
                    </li>
                    <li class="list-group-item">
                        <strong>Última doação:</strong> 04/02/2019
                    </li>
                    <li class="list-group-item">
                        <strong>Restrições de saúde:</strong> Nenhuma
                    </li>
                    <li class="list-group-item">
                        <strong>Telefone:</strong> (41) 00000-0000
                    </li>
                    <li class="list-group-item">
                        <strong>E-mail:</strong> email@gmail.com
                    </li>
                    <li class="list-group-item">
                        <strong>Cidade:</strong> Curitiba
                    </li>
                    <li class="list-group-item">
                        <strong>Estado:</strong> Paraná
                    </li>
                    <li class="list-group-item">
                        <strong>Endereço:</strong> Rua Sem Nome, 123
                    </li>
                    <li class="list-group-item">
                        <strong>Disponibilidade:</strong> Segunda a sexta-feira, das 9h às 17h
                    </li>
                </ul>
                <a href="editarperfil.php" class="btn btn-danger mt-3">Editar Perfil</a>
            </aside>
        </div>

        <div class="col-md-8">
            <h2>Bem-vindo(a), Aline A. Bancks!</h2>
            <p>Aqui você pode visualizar e editar suas
                informações pessoais, bem como acompanhar suas doações.
            </p>
            <p>
                Você poderá escolher o local de sua preferência ou o mais proximo da sua região para realizar a
                doação.
            </p>

            <h3>Realizar doação</h3>
            <div class="mb-3">
                <label for="dataInput" class="form-label">Selecione uma data</label>
                <input type="date" id="dataInput" class="form-control">
            </div>
            <form>
                <div class="mb-3">
                    <label for="hospitalInput" class="form-label">Selecione um local de preferência</label>
                    <select id="hospitalInput" class="form-select">
                        <option selected disabled>selecione</option>
                        <option value="hospital1">Hospital A</option>
                        <option value="hospital2">Hemocentro B</option>
                        <option value="hospital3">Hospital C</option>
                    </select><br>
                    <button type="submit" class="btn btn-danger" onclick="alerta()">Agendar doação</button>
                </div>
                <br><br>

                <h4>Localizar hemocentros mais proxímos com base em seu endereço</h4>

                <div class="mb-3">
                    <label for="localInput" class="form-label">Localização</label>
                    <input type="text" id="localInput" class="form-control" placeholder="Digite o endereço"
                        onclick="obterLocalizacao()">
                </div>
                <input type="checkbox" id="pesquisarCheckbox" class="d-none">
                <label for="pesquisarCheckbox" class="btn btn-danger">Pesquisar</label> <!--colcoar cidade-->
                <div class="conteudo-oculto">
                    <br>
                    <p>Os mais proximos:</p>
                    <br>
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Hemocentro A</h5>
                                    <p><strong>Nome:</strong> Hemocentro A</p>
                                    <p><strong>Endereço:</strong> Rua de teste, 1244, Água Verde</p>
                                    <p><strong>Telefone:</strong> 41 00000-0000</p>
                                    <p><strong>CEP:</strong> xxxxx-xxx</p>
                                    <p><strong>e-mail:</strong> teste@email.com</p>
                                    <p><strong>Horário de funcionamento:</strong> Segunda a sábado, das 9h às
                                        17h</p>
                                    <button type="submit" class="btn btn-danger" onclick="alerta()">Agendar
                                        doação</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Hemocentro B</h5>
                                    <p><strong>Nome:</strong> Hemocentro B</p>
                                    <p><strong>Endereço:</strong> Rua de teste, 1244, Centro</p>
                                    <p><strong>Telefone:</strong> 41 00000-0000</p>
                                    <p><strong>CEP:</strong> xxxxx-xxx</p>
                                    <p><strong>e-mail:</strong> teste@email.com</p>
                                    <p><strong>Horário de funcionamento:</strong> Segunda a sexta-feira, das 9h
                                        às 18h</p>
                                    <button type="submit" class="btn btn-danger" onclick="alerta()">Agendar
                                        doação</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<br>
<div class="container historico-doacoes">
    <h3>Histórico de doações</h3>
    <hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>DATA</th>
                <th>LOCAL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>04/02/2019</td>
                <td>Hospital E</td>
            </tr>
            <tr>
                <td>08/04/2018</td>
                <td>Hospital D</td>
            </tr>
            <tr>
                <td>08/04/2017</td>
                <td>Hospital C</td>
            </tr>
            <tr>
                <td>08/04/2016</td>
                <td>Hospital B</td>
            </tr>
            <tr>
                <td>08/04/2015</td>
                <td>Hospital A</td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    function alerta () {
        alert("Doação agendada com sucesso!");
    };


    function obterLocalizacao () {

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(exibirLocalizacao);
        } else {
            alert("Geolocalização não suportada pelo navegador.");
        }
    }

    function exibirLocalizacao (posicao) {
        var latitude = posicao.coords.latitude;
        var longitude = posicao.coords.longitude;

        var url = `https://nominatim.openstreetmap.org/reverse?format=json&lat=${latitude}&lon=${longitude}`;
        //url que acessa a api

        fetch(url)
            .then(response => response.json())
            .then(data => {
                var endereco = data.display_name;

                // Preenche o valor do input com o endereço
                document.getElementById("localInput").value = endereco;
            })
            .catch(error => {
                console.error(error);
                alert("Erro ao processar a requisição.");
            });
    }
</script>
