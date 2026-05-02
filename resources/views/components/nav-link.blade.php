@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-olive'
            : 'text-text';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
