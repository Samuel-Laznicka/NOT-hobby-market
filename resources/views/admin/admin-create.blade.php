@props(['product'])

<x-page.layout>
    <x-slot:heading>
        Admin tvorba
    </x-slot:heading>

    <x-page.section-heading src="{{Vite::asset('resources/images/logo-full.png')}}">
        Nový produkt
    </x-page.section-heading>

    <x-forms.form method="POST" action="/admin">
        
        <x-forms.input 
            label="Název produktu" 
            name="name" 
            placeholder="Květináč"
        />
        <x-forms.error name="name"/>

        <x-forms.input 
            label="Popis produktu" 
            name="description" 
            placeholder="Venkovní" 
        />
        <x-forms.error name="description"/>
        
        <x-forms.input 
            label="Cena za produkt" 
            name="price" 
            placeholder="2000.00,-"
        />
        <x-forms.error name="price"/>

        <x-forms.select 
            label="Příslušná kategorie produktů" 
            name="category_id"
        >
            <option value="1">Stavební materiály</option>
            <option value="2">Pracovní nářadí</option>
            <option value="3">Zahradní potřeby</option>
            <option value="4">Dekorace a nábytek</option>
        </x-forms.select>

        <x-forms.divider />

        <button class="bg-green rounded-xl px-5 py-4 w-full max-w-xl float-center text-sm font-semibold leading-6 border border-green hover:bg-blue hover:text-green">
            Zveřejnit
        </button>

    </x-forms.form>
</x-page.layout>