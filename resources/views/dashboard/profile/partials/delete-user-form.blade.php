<section class="py-5">
    <header>
        <h2>
            Deletar conta
        </h2>

        <strong>ATENÇÃO:</strong>
        <br>
        Uma vez deletada, todos os seus dados serão deletados permanentemente.
    </header>

    <a href="{{ url('/deletar-conta') }}">
        <x-danger-button
            class="mt-3"
        >
        Deletar conta
        </x-danger-button>
    </a>
</section>