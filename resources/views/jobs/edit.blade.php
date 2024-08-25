@props(['job'])

<x-layout>
    <x-page-heading >Úprava:{{ $job->title }}</x-page-heading>

    <form method="POST" action="/jobs/{{ $job->id }}" class="max-w-2xl mx-auto space-y-6">
        @csrf
        @method('PATCH')

        <x-forms.input 
            label="Název pozice" 
            name="title" 
            placeholder="Manager"
            value="{{ $job->title }}"
        />
        <x-forms.error name="title"/>
        
        <x-forms.input 
            label="Peněžní ohodnocení" 
            name="salary" 
            placeholder="40.000 CZK" 
            value="{{ $job->salary }}"
        />
        <x-forms.error name="salary"/>
        
        <x-forms.input 
            label="Místo výkonu práce" 
            name="workPlace" 
            placeholder="Praha 3, Vinohrady"
            value="{{ $job->workPlace }}" 
        />
        <x-forms.error name="workPlace"/>

        <x-forms.select 
            label="Typ pracovního úvazku" 
            name="emplType">
            value="{{ $job->emplType }}"
                <option>Plný úvazek</option>
                <option>Částečný úvazek</option>
        </x-forms.select>

        <x-forms.input 
            label="URL" 
            name="url" 
            placeholder="https://firma.cz/volne-pozice/nabidka-manager" 
            value="{{ $job->url }}"
        />
        <x-forms.error name="url" />
        
        <x-forms.checkbox label="Příplatek za extra zviditelnění pracovní pozice" name="featured" value="{{ $job->featured}}" />

        <x-forms.divider />

        <x-forms.input 
            label="Značení (odděleno čárkou)" 
            name="tags" 
            placeholder="frontend, backend, IT" 
        />
            

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                    <button form="delete-form" class="bg-indigo-600 rounded py-2 px-6 font-bold">
                        Odstranit
                    <button>
            </div>

            <div class="flex items-center gap-x-6">
                <a href="/jobs/{{ $job->id }}" class="text-sm font-semibold leading-6">
                    <x-forms.button>
                        Zahodit
                    </x-forms.button>
                </a>
    
                <div>
                    <x-forms.button type="submit">
                        Uložit
                    </x-forms.button>
                </div>
            </div>
            
        </div>
    </form>

    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>

</x-layout>