<x-guest-layout>
    <x-auth.layout
    class="login__bg"
    >
        <h1 class="mb-4">Cadastro</h1>
        
        <form method="POST" action="{{ route('register') }}">
            @csrf
        
            <!-- Name -->
            <div>
                <x-input-label for="name" value="Nome" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
        
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" value="E-mail" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" value="Senha" />
        
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
        
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        
            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" value="Confirmar senha" />
        
                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />
        
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
        
            <div class="d-block mt-4">
                <a href="{{ route('login') }}">
                    Já está registrado?
                </a>
        
                <x-primary-button class="w-100 mt-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>

        <div>
            <p>Já possui uma conta?</p>
            <a href="/login">Entre por aqui! :D</a>
        </div>
    </x-auth.layout>
</x-guest-layout>