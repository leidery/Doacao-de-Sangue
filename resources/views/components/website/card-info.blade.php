<div {{ $attributes->merge(['class' => 'card']) }}>
    <div class="card-body">
        <p class="text-secondary">{{ $subtitle }}</p>
        <h2 class="text-center">{{ $title }}</h2>
        <img :src="{{ $icon }}" :alt="{{ $iconAlt }}">
        {{ $slot }}
    </div>
</div>