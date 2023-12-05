<div class="d-flex">
    <img class="bloodbank__photo" src="{{ asset($img) }}"/>
    <div class="p-2 ps-4">
        <h2 class="mb-5">{{ $name }}</h2>
        <p>{{ $description }}</p>

        <a href="/login">
            <button class="btn btn-danger btn-blood mt-3 px-5">Agendar doação</button>
        </a>
        
        <a href="/locais/hemepar">
            <button class="btn btn-success mt-3 px-5 text-uppercase text-white">Ver mais sobre</button>
        </a>
    </div>
</div>