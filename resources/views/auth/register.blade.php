<x-layout>
    <x-page-heading>Registrace</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="Jméno" name="name" />
            <x-forms.error name="name"/>
        <x-forms.input label="E-mail" name="email" type="email" />
            <x-forms.error name="email"/>
        <x-forms.input label="Heslo" name="password" type="password" />
            <x-forms.error name="password"/>
        <x-forms.input label="Potvrzení hesla" name="password_confirmation" type="password" />

        <x-forms.divider />

        <x-forms.input label="Jméno zaměstnavatele" name="employer" />
            <x-forms.error name="employer"/>
        <x-forms.input label="Logo firmy" name="logo" type="file" />

        <x-forms.button>Vytvořit účet</x-forms.button>
    </x-forms.form>
</x-layout>