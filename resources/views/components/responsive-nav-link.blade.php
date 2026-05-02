@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-olive'
            : 'text-white';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
