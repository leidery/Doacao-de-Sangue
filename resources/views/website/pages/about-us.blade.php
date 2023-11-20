<x-guest-layout>
    @include('website.layouts.navbar')

    <x-website.header bgImg="img/bg-header.png">
        <h1>Quem somos</h1>
    </x-website.header>

    <div class="container py-5">
        <h1 class="mb-5">
            Olá! Somos estudantes da UniOpet :)
        </h1>

        <p>
            Desenvolvemos a plataforma Doação de Sangue para facilitar o processo,
            conectando potenciais doadores a hemobancos e centros de coleta de
            sangue próximos.
        </p>
        <p>
            Através de uma aplicação web intuitiva, os usuários poderão encontrar
            informações sobre os locais de doação, agendar doações, receber notificações de campanhas e
            lembretes sobre a elegibilidade para doação.
        </p>
        <p class="mt-5">
            E aí, <strong>bora salvar vidas?</strong> :D
        </p>
        <a href="{{ url('login') }}">
            <button class="btn btn-danger btn-blood mt-3 px-5">Agendar doação</button>
        </a>
    </div>
    @include('website.layouts.footer')
</x-guest-layout>
