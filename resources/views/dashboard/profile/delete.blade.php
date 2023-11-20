<x-app-layout>
    <div class="container py-5">
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2>
                Você tem certeza que quer deletar?
            </h2>

            <p>
                Uma vez deletado já era :((
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="Senha" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="Senha"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-3">
                <x-secondary-button x-on:click="$dispatch('close')">
                    Cancelar
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    Deletar conta
                </x-danger-button>
            </div>
        </form>
    </div>
</x-app-layout>