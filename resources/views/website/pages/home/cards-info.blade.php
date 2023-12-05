<div class="container my-5">
    <div class="row justify-content-evenly">
        <x-website.card-info
            title="Posso doar?"
            subtitle="Como sei se"
            icon="icons/computador-saude.svg"
            iconAlt="ícone de coleta de sangue"
            class="col col-md-3 my-3"
        >
            <p>
                Está em dúvida se pode doar?
                <br>
                Faça agora um teste online:
            </p>

            <a href="{{ url('teste-posso-doar') }}">
                <button class="btn btn-danger btn-blood mt-3 px-5 w-100">Fazer teste</button>
            </a>
        </x-website.card-info>
        <x-website.card-info
            title="Hemobanco"
            subtitle="Escolhendo o"
            icon="icons/location-heart.svg"
            iconAlt="ícone de localização em formato de coração"
            class="col col-md-3 my-3"
        >
            <p>
                Com a localização informada,
                você sabe de todos os locais
                e os horários!
            </p>

            <a href="{{ url('locais') }}">
                <button class="btn btn-danger btn-blood mt-3 px-5 w-100">Ver locais</button>
            </a>
        </x-website.card-info>

        <x-website.card-info
            title="Coleta"
            subtitle="Agendamento da"
            icon="icons/coleta-sangue.svg"
            iconAlt="ícone de coleta de sangue"
            class="col col-md-3 my-3"
        >
            <p>
                Com o hemobanco escolhido,
                você pode agendar sua coleta online!
            </p>

            <a href="{{ url('login') }}" class="mt-auto">
                <button class="btn btn-danger btn-blood mt-3 px-5 w-100">Agendar doação</button>
            </a>
        </x-website.card-info>
    </div>
</div>