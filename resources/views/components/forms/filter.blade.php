<div class="ml-5 flex space-x-4">
  <x-forms.shop-link href="/shop" :active="request()->is('shop')">Všechny produkty</x-forms.shop-link>
  <x-forms.shop-link href="/shop-garden" :active="request()->is('shop-garden')">Zahradní potřeby</x-forms.shop-link>
  <x-forms.shop-link href="/shop-materials" :active="request()->is('shop-materials')">Stavební materiál</x-forms.shop-link>
  <x-forms.shop-link href="/shop-tools" :active="request()->is('shop-tools')">Pracovní nářadí</x-forms.shop-link>
  <x-forms.shop-link href="/shop-decor" :active="request()->is('shop-decor')">Dekorace a nářadí</x-forms.shop-link>
</div>