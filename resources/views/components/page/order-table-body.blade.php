@props(['orderItem'])

<tbody>
    <tr>
        <x-forms.td>
            {{ $orderItem->name }} - {{ $orderItem->description}}
        </x-forms.td>

        <x-forms.td>
            {{ $orderItem->quantity}}  
        </x-forms.td>

        <x-forms.td>
            {{ $orderItem->price }},- za kus
        </x-forms.td>

        <x-forms.td>
            {{ $orderItem->subtotal}},-
        </x-forms.td>
    </tr>
</tbody>
