@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'auth__session-status']) }}>
        {{ $status }}
    </div>
@endif