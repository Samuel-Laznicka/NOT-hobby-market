@props(['active' => false])

<a class="{{ $active ? 'bg-gray text-green border border-green' : 'text-white hover:border border-green'}} rounded-md px-3 py-2 text-base font-medium text-white" 
    aria-current="{{ $active ? 'page': 'false' }}"
    {{ $attributes }}
>{{ $slot }}</a>
