<x-page.layout>
    <x-slot:heading>
        Přihlášení
    </x-slot:heading>

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="{{Vite::asset('resources/images/logo-clear.png')}}" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-green">Přihlašte se do svého účtu</h2>
        </div>
    
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <x-forms.form method="POST" action="/login">
                    <x-forms.input label="E-mail" name="email" type="email" />
                    <x-forms.input label="Heslo" name="password" type="password" />
            
                    <button type="submit" class="flex w-full justify-center rounded-md bg-green px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-gray border border-green focus-visible:outline focus-visible:outline-2">Sign in</button>
                </x-forms.form>
        </div>
    </div>

</x-page.layout>