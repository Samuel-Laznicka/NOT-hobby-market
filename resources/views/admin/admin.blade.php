<x-page.layout>

    <x-slot:heading>
        Admin - přehled zboží
    </x-slot:heading>
    
    <div>
        <a href="/admin-create">
            <button type="submit" class="float-end bg-green rounded py-2 px-6 font-bold hover:bg-blue border border-green">
                Přidat produkt
            </button>
        </a>
    </div>

    <section class="pt-10">
        <div>
            <x-page.section-heading src="{{Vite::asset('resources/images/mat-full.png')}}">
                Stavební materiály
            </x-page.section-heading>
    
            @foreach ($products as $product)
                @if ($product->category_id == 1)
                    <x-page.admin-product-card :$product />
                @endif
            @endforeach
        </div>
    </section>

    <section class="pt-10">
        <div>
            <x-page.section-heading src="{{Vite::asset('resources/images/tools-full.png')}}">
                Pracovní nářadí
            </x-page.section-heading>
    
            @foreach ($products as $product)
                @if ($product->category_id == 2)
                    <x-page.admin-product-card :$product />
                @endif
            @endforeach
        </div>
    </section>

    <section class="pt-10">
        <div>
            <x-page.section-heading src="{{Vite::asset('resources/images/garden-full.png')}}">
                Zahradní potřeby
            </x-page.section-heading>
    
            @foreach ($products as $product)
                @if ($product->category_id == 3)
                    <x-page.admin-product-card :$product />
                @endif
            @endforeach
        </div>
    </section>

    <section class="pt-10">
        <div>
            <x-page.section-heading src="{{Vite::asset('resources/images/decor-full.png')}}">
                Dekorace a nábytek
            </x-page.section-heading>
    
            @foreach ($products as $product)
                @if ($product->category_id == 4)
                    <x-page.admin-product-card :$product />
                @endif
            @endforeach
        </div>
    </section>

</x-page.layout>