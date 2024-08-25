<x-layout>
    <x-page-heading>Přihlášení</x-page-heading>

    <x-forms.form method="POST" action="/login">
        <x-forms.input label="E-mail" name="email" type="email" />
        <x-forms.input label="Heslo" name="password" type="password" />

        <x-forms.button>Přihlásit se</x-forms.button>
    </x-forms.form>
</x-layout>