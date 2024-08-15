@props('product')

<div class="p-4 bg-white/5 rounded-xl flex gap-x-6 border border-transparent hover:border-red-500 group transitions-colors duration-300">
    <div>
        <img src="{{ Vite::asset('') . $product->image }}" class="w-10 h-10">
    </div>

<div class="flex-1 flex flex-col">
    <div class="self-start text-sm text-gray-400 transition-colors duration-300">{{ $product->name }}</div>

    <h3 class="font-bold text-xl mt-2 group-hover:text-blue-800">
            {{ $product->description }}
    </h3>

    <p class="text-sm text-gray-400 mt-2">{{ $product->price }}</p>

</div>