<x-page.layout>
    <x-slot:heading>
        Domovská stránka
    </x-slot:heading>

    <div class="container">
        <div style="position: relative;">

            <section class="text-center pt-5">
                <h1 class="font-bold text-4xl text-green">Budeme Vaším parťákem při každém Vašem projektu</h1>
                
                <h2 class="mt-5 text-white/50">Máme co hledáte</h2>

                <form action="/search" class="mt-2">
                    <x-forms.input :label="false" name="q" placeholder="Aku vrtačka..." :$products/>
                </form>

                <h2 class="mt-10 text-white/50">Nebo si prohlédněte naši nabídku</h2>
            </section>

            <x-forms.divider />

            <h2 class="text-2xl font-bold text-green">Naše kategorie</h2>

            <x-store.category-section :categories="$categories" /> 
        </div>
    </div>
</x-page.layout>