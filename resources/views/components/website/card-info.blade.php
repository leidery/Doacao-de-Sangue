<div {{ $attributes->merge(['class' => 'card']) }}>
    <div class="card-body d-block">
        <p class="text-secondary">{{ $subtitle }}</p>
        <h2 class="text-center">{{ $title }}</h2>
        <img
            src="{{ asset($icon) }}"
            alt="{{ $iconAlt }}"
            class="card-info__icon"
        >
        {{ $slot }}
    </div>
</div>