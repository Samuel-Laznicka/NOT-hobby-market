<x-page.layout>
    <x-slot:heading>
        Prodej
    </x-slot:heading>

    <x-page.category-filter>Stavební materiály</x-page.category-filter>
    <div style="display: flex; justify-content: center;">
        <div style="display: flex; flex-wrap: wrap; justify-content: center;">
            @foreach ($products as $product)
                @if ($product->category_id == 1)
                    <div style="width: 25%; box-sizing: border-box; margin: 10px; padding: 20px;">
                        <x-store.product-card :$product />
                    </div>
                @endif
            @endforeach
        </div>
    </div>
  
</x-page.layout>