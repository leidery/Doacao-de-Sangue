@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'input-group-text']) }}>
        @foreach ((array) $messages as $message)
            <li style="color: red">{{ $message }}</li>
        @endforeach
    </ul>
@endif