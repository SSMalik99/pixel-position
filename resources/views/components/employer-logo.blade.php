@props(['width' => 90])


{{-- Just picking random image --}}
{{-- <img src="http://picsum.photos/seed/{{ rand(0,100000) }}/100/100" class="rounded-xl" alt=""> --}}


<img src="http://picsum.photos/seed/{{ rand(0,100000) }}/{{ $width }}" class="rounded-xl" alt="">