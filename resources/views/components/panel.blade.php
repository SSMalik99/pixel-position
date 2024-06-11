@php

    $defaultClasses = "p-4 bg-white/5 rounded text-center border border-transparent hover:border-blue-600 group transition-colors duration-300"
@endphp

<div {{ $attributes(['class' => $defaultClasses ]) }}>
    {{ $slot }}
</div>