<x-guest-layout>
    <x-website.header bgImg="{{ asset('img/bg-header.png') }}">
        <h1>Perguntas Frequentes</h1>
    </x-website.header>

    @include('website.pages.faq.duvidas')
    @include('website.components.cto-donation')
</x-guest-layout>
