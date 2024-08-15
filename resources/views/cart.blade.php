<x-page.layout>
    <x-slot:heading>
        Prodej
    </x-slot:heading>
      
    <x-page.section-heading src="{{Vite::asset('resources/images/cart-full.png')}}">
        Můj košík
    </x-page.section-heading>
    <div>
        <table class="border border-gray">
            <thead>
                <tr>
                    <x-forms.th>Produkt</x-forms.th>
                    <x-forms.th>Množství</x-forms.th>
                    <x-forms.th>Cena za kus</x-forms.th>
                    <x-forms.th>Mezisoučet</x-forms.th>
                    <x-forms.th></x-forms.th>
                </tr>
            </thead>

            @foreach ($cartItems as $cartItem)
                <x-page.cart-table-body :$cartItem />
            @endforeach

            <tfoot>
                <tr>
                    <x-forms.th></x-forms.th>
                    <x-forms.th></x-forms.th>
                    <x-forms.th></x-forms.th>
                    <x-forms.th>Celkem položek: {{ $totalQuantity }} ks</x-forms.th>
                    <x-forms.th>Celková Cena: {{ $totalPrice }},-</x-forms.th>
                </tr>
            </tfoot>
        </table>
    </div>

    <div class="mt-5 float-center flex">
        <form method="POST" action="/index">
            @csrf
    
            <button class="bg-green rounded py-2 px-6 font-bold hover:bg-blue border border-green hover:text-green">
                Koupit vybrané zboží
            </button>
        </form>
        
        <form method="POST" action="/cart" id="delete-form" class="mx-5">
            @csrf
            @method('DELETE')
    
            <button type="submit" class="bg-green rounded py-2 px-6 font-bold hover:bg-blue border border-green hover:text-green">
                Smazat obsah košíku
            </button>
        </form>
    </div>
  
  </x-page.layout>