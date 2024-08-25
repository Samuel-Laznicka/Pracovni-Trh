<x-layout>
    <x-page-heading>Nová pozice</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input 
        label="Název pozice" 
        name="title" 
        placeholder="Manager" 
        />
        <x-forms.error name="title"/>
        
        <x-forms.input 
        label="Peněžní ohodnocení" 
        name="salary" 
        placeholder="40.000 CZK" 
        />
        <x-forms.error name="salary"/>
        
        <x-forms.input 
        label="Místo výkonu práce" 
        name="workPlace" 
        placeholder="Praha 3, Vinohrady" 
        />
        <x-forms.error name="workPlace"/>

        <x-forms.select 
        label="Typ pracovního úvazku" 
        name="emplType">
            <option>Plný úvazek</option>
            <option>Částečný úvazek</option>
        </x-forms.select>

        <x-forms.input 
        label="URL" 
        name="url" 
        placeholder="https://firma.cz/volne-pozice/nabidka-manager" 
        />
        <x-forms.error name="url" />

        <x-forms.checkbox 
        label="Příplatek za extra zviditelnění pracovní pozice" 
        name="featured" 
        />

        <x-forms.divider />

        <x-forms.input 
        label="Značení (odděleno čárkou)" 
        name="tags" 
        placeholder="frontend, backend, IT" 
        />

        <x-forms.button>Zveřejnit</x-forms.button>
    </x-forms.form>
</x-layout>