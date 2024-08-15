@props(['product'])

<x-page.layout>
    <x-slot:heading>
        Admin úprava
    </x-slot:heading>

    <x-page.section-heading src="{{Vite::asset('resources/images/logo-full.png')}}">
        Úprava: {{ $product->name }}
    </x-page.section-heading>

    <form method="POST" action="/admin/{{ $product->id }}" class="max-w-2xl mx-auto space-y-6">
        @csrf
        @method('PATCH')

        <x-forms.input 
            label="Název produktu" 
            name="name" 
            placeholder="Květináč"
            value="{{ $product->name }}"
        />
        <x-forms.error name="name"/>
    
        <x-forms.input 
            label="Popis produktu" 
            name="description" 
            placeholder="Venkovní" 
            value="{{ $product->description }}"
        />
        <x-forms.error name="description"/>
  
        <x-forms.input 
            label="Cena za produkt" 
            name="price" 
            placeholder="2000.00,-"
            value="{{ $product->price }}" 
        />
        <x-forms.error name="price"/>

        <x-forms.select 
            label="Příslušná kategorie produktů" 
            name="category_id"
            value="{{ $product->category_id }}"
        >
            <option value="1">Stavební materiály</option>
            <option value="2">Pracovní nářadí</option>
            <option value="3">Zahradní potřeby</option>
            <option value="4">Dekorace a nábytek</option>
        </x-forms.select>

        <x-forms.divider />

        <div class="flex items-center justify-between gap-x-6">
            <a href="/admin" class="text-green text-sm font-semibold leading-6 border border-green py-2 px-6 rounded-xl hover:bg-green hover:text-blue">
                <button>
                    Zahodit
                </button>
            </a>

            <div>
                <button type="submit" class="text-green text-sm font-semibold leading-6 border border-green py-2 px-6 rounded-xl hover:bg-green hover:text-blue">
                    Uložit
                </button>
            </div>

            <button form="delete-form" class="bg-green rounded py-2 px-6 font-bold hover:bg-blue border border-green">
                Odstranit
            <button>
        </div>
    </form>
    
    <form method="POST" action="/admin/{{ $product->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-page.layout>