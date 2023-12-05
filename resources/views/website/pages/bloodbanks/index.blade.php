<x-guest-layout>
    <x-website.header bgImg="{{ asset('img/bg-locais.png') }}">
        <h1>Locais para doação</h1>
    </x-website.header>

    <div class="container py-5">
        <div class="col-12 mb-5">
            <p>Aqui está a lista completa de todos os lugares que somos parceiros:</p>
        </div>
        @foreach ($bloodbanks as $bloodbank)
            <div class="col-12 mt-2">
                <x-website.bloodbank-card
                :name="$bloodbank->name"
                :description="$bloodbank->about"
                img="img/hemepar.png"
                />
            </div>
        @endforeach
    </div>
</x-guest-layout>