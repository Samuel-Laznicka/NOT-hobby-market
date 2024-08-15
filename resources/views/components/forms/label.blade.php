@props(['name', 'label'])

<div class="inline-flex items-center gap-x-2">
    <img src="{{Vite::asset('resources/images/logo-full.png')}}" class="h-8 w-15 float-end">
    
    <label class="font-bold text-green" for="{{ $name }}">{{ $label }}</label>
</div>