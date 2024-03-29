<x-app-layout>
    <div class="container py-5">
        <h2 class="mb-5">Hemocentros</h2>

        <div class="row">

            <!-- FORM DE PESQUISA: -->
            <div class="col-12 d-flex">
                <form
                    action="procurar-hemocentro"
                    method="GET"
                    class="d-flex"
                >
                    @csrf
                    @method('POST')
                        <div class="input-group w-auto">
                            <span class="input-group-text">CEP</span>
                            <div class="form-floating">
                                <input
                                    type="text"
                                    name="cep"
                                    class="form-control"
                                    placeholder="Digite o CEP"
                                    required
                                />
                                <label>Digite aqui o CEP</label>
                            </div>
                        </div>

                        <button
                            type="submit"
                            class="btn btn-success ms-3"
                        >
                            Pesquisar
                        </button>
                        
                        <button
                            type="button"
                            class="btn btn-danger ms-3"
                        >
                            <a href="/dashboard" style="text-decoration: none; color: white">
                                Limpar pesquisa
                            </a>
                        </button>
                </form>
            </div>

            <!-- RESULTADO PESQUISA: -->
            @if(!$cep)
            <div class="col-12 mt-5">
                <p>Exibindo todos os resultados:</p>
            </div>
            @endif
            @if(count($bloodbanks) < 1 && !$cep)
                <div class="col-12 mt-2">
                    <p>Sem bancos de sangue disponíveis.</p>
                </div>
            @endif

            @if($cep)
            <div class="col-12 mt-5">
                <p>Exibindo resultados da busca por: <strong>{{ $cep }}</strong></p>
            </div>
            @endif
            @if(count($bloodbanks) < 1 && $cep)
                <div class="col-12 mt-2">
                    <p>Sem bancos de sangue disponíveis no CEP informado</p>
                </div>
            @endif

            @foreach ($bloodbanks as $bloodbank)
                <div class="col-12 mt-2">
                    <x-dashboard.bloodbank-card
                    :name="$bloodbank->name"
                    :description="$bloodbank->about"
                    img="img/hemepar.png"
                    />
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>