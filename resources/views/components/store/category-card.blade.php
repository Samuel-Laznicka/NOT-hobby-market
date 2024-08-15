@props(['category'])

<div class="group relative mx-auto border border-gray border-bold">
  <div class="mt-5 mb-5 relative overflow-hidden rounded-lg bg-blue group-hover:opacity-75">
    <img src="{{ Vite::asset('') . $category->image }}" alt="Obraz kategorie" class="object-cover object-center" style="width: 250px; height: 250px;">
  
    <h2 class="mt-4 text-l text-green text-center font-bold">
      <a href="{{$category->url}}">
        <span class="absolute inset-0"></span>
        {{ $category->name }}
      </a>
    </h2>

    <p class="text-sm text-white/75 text-center font-semibold">{{$category->description}}</p>
  </div>
</div>