@props(['product'])

<div class="w-full max-w-xl">
    <img src="{{ Vite::asset('') . $product->image }}" alt="Ikona" class="h-8 w-8 float-start mx-4">
    
    <h3 class="text-green font-bold">
        {{ $product->name }} 
        - {{ $product->description }}
        | {{ $product->price }},-
    </h3>

    <div >
        <div class="text-white ml-10 flex items-end space-x-4">
            <a href="/admin/{{ $product->id }}/admin-edit" :$product>
                <button class="float-right mt-2 hover:text-green">Upravit údaje</button>
            </a>
        </div>
    </div>
    <br>
</div>