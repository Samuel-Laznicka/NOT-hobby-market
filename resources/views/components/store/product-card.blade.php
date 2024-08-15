@props(['product'])

<div>
  <div>
    <div class="mt-5 mb-5 relative overflow-hidden rounded-lg group-hover:opacity-75 bg-gray">
      <img src="{{ Vite::asset('') . $product->image }}" alt="Obraz kategorie" class="object-cover object-center" style="width: 250px; height: 250px;">
      
      <h2 class="mt-4 text-l text-green text-center font-bold">
          {{ $product->name}}
      </h2>

      <x-forms.divider />

      <p class="text-sm text-white font-semibold text-center">{{ $product->description}}</p>
        
      <p class="text-sm text-green font-semibold mb-2 mx-2" style="text-align:right">{{ $product->price}},-<br></p>

      <x-forms.form method="POST" action="#">
        <input type="hidden" value="{{ $product->name }}" name="name">
        <input type="hidden" value="{{ $product->description }}" name="description">
        <input type="hidden" value="{{ $product->price }}"  name="price">
        
        <button class="float-end bg-green text-blue text-sm font-semibold leading-6 border border-green py-2 px-6 rounded-xl hover:bg-blue hover:text-green">
          Přidat do košíku
        </button>
      </x-forms.form>
    </div> 
  </div>
</div>
