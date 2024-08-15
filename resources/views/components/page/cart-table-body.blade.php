@props(['cartItem', 'user'])

<tbody>
    <tr>
        <x-forms.td>
            {{ $cartItem->name }} - {{ $cartItem->description}}
        </x-forms.td>

        <x-forms.td>
            <div class="flex">
                <form method="POST" action="/admin/increment/{{ $cartItem->id }}" class="max-w-2xl mx-auto space-y-6">
                    @csrf
                    @method('PATCH')
            
                    <button type="submit" class="text-green text-sm font-semibold leading-6 border border-green py-1 px-3 rounded-xl hover:bg-green hover:text-blue">
                        +
                    </button>  
                </form>
                {{ $cartItem->quantity}}
                <form method="POST" action="/admin/decrement/{{ $cartItem->id }}" class="max-w-2xl mx-auto space-y-6">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="text-green text-sm font-semibold leading-6 border border-green py-1 px-3 rounded-xl hover:bg-green hover:text-blue">
                        -
                    </button>
                </form>
            </div>
        </x-forms.td>

        <x-forms.td>
            {{ $cartItem->price }},- za kus
        </x-forms.td>

        <x-forms.td>
            {{ $cartItem->subtotal}},-
        </x-forms.td>

        <x-forms.td>
            <form method="POST" action="/cart/{{ $cartItem->id }}" id="delete-form">
                @csrf
                @method('DELETE')

                <button type="delete-form" class="text-green text-sm font-semibold leading-6 border border-green py-2 px-6 rounded-xl hover:bg-green hover:text-blue">
                    Smazat
                </button>
            </form>
        </x-forms.td>
    </tr>
</tbody>
