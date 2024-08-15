@props(['active' => false])

<a class="{{ $active ? 'bg-blue text-green': 'text-white hover:bg-white/5'}} block px-2 py-3" 
    aria-current="{{ $active ? 'page': 'false' }}"
    {{ $attributes }}
>{{ $slot }}</a>