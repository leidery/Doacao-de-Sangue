<x-guest-layout>
    @include('website.layouts.navbar')

    <x-website.header bgImg="img/bg-header.png">
        <h1>Doação de sangue</h1>
        <h2>Bora salvar vidas?</h2>
        <a href="{{ url('login') }}">
            <button class="btn btn-danger btn-blood mt-3 px-5">Agendar doação</button>
        </a>
    </x-website.header>

    @include('website.layouts.footer')
</x-guest-layout>