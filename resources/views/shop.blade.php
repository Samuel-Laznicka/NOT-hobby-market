<x-page.layout>
  <x-slot:heading>
      Prodej
  </x-slot:heading>

  <x-page.category-filter>Celkový sortiment</x-page.category-filter>
    
  <div style="display: flex; justify-content: center;">
    <div style="display: flex; flex-wrap: wrap; justify-content: center;">
      @foreach ($products as $product)
        <div style="width: 25%; box-sizing: border-box; margin: 10px; padding: 20px;">
            <x-store.product-card :$product/>
        </div>
      @endforeach
    </div>
  </div>

  <x-forms.pop-up />

</x-page.layout>