<div class="mx-auto py-5">

    <div class="grid lg:grid-cols-4 gap-10 mt-5">
        @foreach($categories as $category)
            <x-store.category-card :category="$category" />
        @endforeach
    </div>

</div>



            
   