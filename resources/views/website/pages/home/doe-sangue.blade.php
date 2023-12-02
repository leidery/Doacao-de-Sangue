<div class="container py-5">
    <div class="row py-5">
        <div class="col-12 col-md-6">
            <h1>Doe sangue 🩸</h1>
            
            <p>
                Somos um grupo formado por alunos de ADS e Eng. de Software da uniOpet!
                Desenvolvemos este sistema para ajudar na conscientização da doação de sangue.
            </p>
            <p>
                Pela <i>Doe Sangue</i>, você pode ver todos os requisitos para doação
                assim como ver os lugares perto de você onde pode doar.
            </p>
            <p>
                Uma única doação de sangue pode salvar até <strong>4 vidas</strong>!
                Bora fazer a diferença?
            </p>
            <a href="{{ url('login') }}">
                <button class="btn btn-danger btn-blood mt-3 px-5">Agendar doação</button>
            </a>
        </div>

        <div class="col-12 col-md-6">
            <img
                src="{{ asset('img/donation.jpg') }}"
                alt="Desenho. A esquerda par de mãos formando um coração pintado de vermelho, onde sai uma linha de eletrocardiograma, indo até a direita, onde tem uma gota de sangue também pintada de vermelho."
            />
        </div>
    </div>
</div>