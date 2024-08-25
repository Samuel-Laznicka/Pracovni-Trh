@props(['job'])

<x-layout>
    <x-page-heading>
        Dostupná pracovní pozice
    </x-page-heading>

    <x-section-heading>
        {{ $job->title }}
    </x-section-heading>
    
    <div class="float-right">
        <x-employer-logo :employer="$job->employer" :width="100"/>
    </div>

    <x-forms.divider />

        <div class="p-4 bg-white/5 rounded-xl flex gap-x-6 border border-red-500 group">
            <ul>
                <li class="mb-5">Pozici vystavyla firma: {{ $job->employer->name}}</li>
                <li class="mt-5 mb-5">Výplata na této pozici je: {{ $job->salary }}.</li>
                <li class="mt-5 mb-5">Typ úvazku: {{$job->emplType}}</li>
                <li class="mt-5 mb-5">Místo výkonu práce: {{$job->workPlace}}</li>
                <li class="mt-5">Webové stránky zaměstnavatele:<br>{{$job->url}}</li>
            </ul>
        </div>  
    @can('edit', $job)
        <a href="/jobs/{{ $job->id }}/edit" :$job>
            <x-forms.button class="float-right mt-2">Upravit údaje</x-forms.button>
        </a>
    @endcan
</x-layout>
