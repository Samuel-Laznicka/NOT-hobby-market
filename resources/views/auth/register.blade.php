<x-page.layout>
    <x-slot:heading>
        Registrace
    </x-slot:heading>

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="{{Vite::asset('resources/images/logo-clear.png')}}" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-green">Přihlašte se do svého účtu</h2>
        </div>
    
        <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
            <x-forms.input label="Jméno" name="name" />
                <x-forms.error name="name"/>
            <x-forms.input label="E-mail" name="email" type="email" />
                <x-forms.error name="email"/>
            <x-forms.input label="Heslo" name="password" type="password" />
                <x-forms.error name="password"/>
            <x-forms.input label="Potvrzení hesla" name="password_confirmation" type="password" />
    
            <button type="submit" class="flex w-full justify-center rounded-md bg-green px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-gray border border-green focus-visible:outline focus-visible:outline-2">Vytvořit účet</button>
        </x-forms.form>
    </div>
  
</x-page.layout>