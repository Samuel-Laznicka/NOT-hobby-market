<x-page.layout>
    <x-slot:heading>
        Můj profil
    </x-slot:heading>
  
    <x-page.section-heading src="{{Vite::asset('resources/images/cart-full.png')}}">
        Historie nákupů
    </x-page.section-heading>
        @php
            $groupedOrderItems = $orderItems->groupBy('cart_id')
        @endphp

        @foreach ($groupedOrderItems as $groupUniqueId => $orderItemsGroup)
            <div class="mt-10 mb-10">
                <table class="border border-gray">
                    <thead>
                        <tr>
                            <x-forms.th>Produkt</x-forms.th>
                            <x-forms.th>Množství</x-forms.th>
                            <x-forms.th>Cena za kus</x-forms.th>
                            <x-forms.th>Mezisoučet</x-forms.th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orderItemsGroup as $orderItem)
                            <tr>
                                <x-page.order-table-body :$orderItem />
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                            <tr>
                                <x-forms.th-foot></x-forms.th-foot>
                                <x-forms.th-foot></x-forms.th-foot>
                                <x-forms.th-foot>Celkem položek: {{ $tableQuantities[$groupUniqueId] }} ks</x-forms.th-foot>
                                <x-forms.th-foot>Celková Cena: {{ $tableTotals[$groupUniqueId] }},-</x-forms.th-foot>
                            </tr>
                    </tfoot>
                </table>
            </div>
        @endforeach
    </x-page.layout>