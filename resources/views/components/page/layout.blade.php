<!DOCTYPE html>
<html lang="cs" class="h-full bg-blue">
    <head>
        <meta   charset="UTF-8">
        <meta   name="viewport"
                content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        
        <title>not-hobby-market</title>
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
        @vite(['resources/js/app.js'])

    </head>

<body class="h-full">
    @php
        $selected = true;   
    @endphp

    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
           
                        <div class="flex-shrink-0">
                            <a href="/"> 
                                <img class="h-8 w-15" src="{{Vite::asset('resources/images/logo-clear.png')}}" alt="NOT company logo">
                            </a>
                        </div>
      
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <x-page.nav-link href="/" :active="request()->is('/')">Domovksá stránka</x-nav-link>
                                <x-page.nav-link href="/shop" :active="request()->is('shop')">Obchod</x-nav-link>
                                <x-page.nav-link href="/cart" :active="request()->is('cart')">Můj košík</x-nav-link>
                                @admin
                                    <a href="/admin" class="border bg-green hover:border rounded-md px-3 py-2 text-base font-medium text-white">ADMIN - produkty</a>
                                @endadmin
                            </div>
                        </div>
                    </div>

                    @guest
                        <div class="hidden md:block">
                            <div class="text-white ml-10 flex items-baseline space-x-4">
                                <a href="/register" class="hover:text-green">Registrace</a>
                                <a href="/login" class="hover:text-green">Přihlášení</a>
                            </div>
                        </div>
                    @endguest

                    @auth
                        <div class="space-x-6 font-bold flex">
                            <form method="POST" action="/logout">
                                @csrf
                                @method('DELETE')
                                
                                <button>
                                    <a class="text-white hover:text-green">Odhlášení</a>
                                <button>
                            </form>
                        </div>
                    @endauth  

                    @auth
                        <div class="flex justify-between">
                            <a href="/user" class="text-white ml-10 items-baseline mt-2 mx-2 space-x-6 hover:text-green">
                                <h3>Můj profil</h3>
                            </a>
                            <a href="/user" class="float-end">
                                <img src="{{Vite::asset('resources/images/user-clear.png')}}" alt="uživatelská ikona" class="h-10 w-10">
                            </a>
                        </div>
                    @endauth

                </div>
            </div>
  
            <div class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <x-page.nav-link href="/" :active="request()->is('/')">Domovksá stránka</x-nav-link>
                    <x-page.nav-link href="/shop" :active="request()->is('shop')">Obchod</x-nav-link>
                    <x-page.nav-link href="/cart" :active="request()->is('cart')">Můj košík</x-nav-link>
                </div>
            </div>

        </nav>

        <header class="bg-green shadow">
            <div class="mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-white py-2">{{ $heading }}</h1>
            </div>
        </header>
       
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>

    </div>  
</body>
</html>