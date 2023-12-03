<x-guest-layout>
    <x-auth.layout class="login__bg">
        <h1 class="mb-4">Cadastro</h1>
        
        <form method="POST" action="{{ route('register') }}">
            @csrf
        
            <!-- Name -->
            <div>
                <x-input-label for="name" value="Nome" />
                <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
        
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" value="E-mail" />
                <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" value="Senha" />
        
                <x-text-input id="password"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
        
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        
            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" value="Confirmar senha" />
        
                <x-text-input id="password_confirmation"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />
        
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
        
            <div class="d-block mt-4">
        
                <x-primary-button class="w-100 mt-4">
                    Cadastre-se
                </x-primary-button>
            </div>
        </form>

        <div class="mt-3">
            <span>Já está registrado?</span>    
            <a href="{{ route('login') }}">
                Clique aqui para fazer login
            </a>
        </div>
    </x-auth.layout>
</x-guest-layout>