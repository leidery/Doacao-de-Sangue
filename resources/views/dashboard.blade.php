<x-app-layout>
    <div class="container py-5">
        <h2>Hemocentros</h2>

        <div class="row">
            <div class="col-12 col-md-6 mt-5 d-flex">
                <div class="bloodbank__photo" style="background-image: url({{ asset('img/bg-header.png') }})"></div>
                <div class="p-2 ps-4">
                    <h2>Nome do hemocentro</h2>
                    <p>Descrição</p>
                    <button class="btn btn-danger btn-blood mt-3 px-5">Agendar doação</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>