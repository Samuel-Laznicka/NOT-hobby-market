<x-page.layout>
    <x-slot:heading>
        Výsledky vyhledávání
    </x-slot:heading>

    <div style="display: flex; justify-content: center;">
        <div style="display: flex; flex-wrap: wrap; justify-content: center;">
            @foreach ($products as $product)
            <div style="box-sizing: border-box; margin: 10px; padding: 20px;">
                <x-store.product-card :$product />
            </div>
            @endforeach
        </div>
    </div>   
</x-page.layout>