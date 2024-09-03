<x-page.layout>
    <x-slot:heading>
        Výsledky vyhledávání
    </x-slot:heading>

    <div style="display: flex; justify-content: center;">
        <div style="display: flex; flex-wrap: wrap; justify-content: center;">
            @if ($products->isNotEmpty())
                @foreach ($products as $product)
                <div style="box-sizing: border-box; margin: 10px; padding: 20px;">
                    <x-store.product-card :$product />
                </div>
                @endforeach
            @else
                <h2 class="mt-10 text-xl text-center font-bold text-green">Vyhledávaný produkt není k dispozici!</h2>
            @endif
        </div>
    </div>
</x-page.layout>