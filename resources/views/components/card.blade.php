@php
    $classes = 'p-4 bg-white/5 rounded-xl flex gap-x-6 border border-transparent hover:border-red-500 group transitions-colors duration-300';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>