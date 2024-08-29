@props(['jobs'])

<x-layout>
    <x-page-heading>Výsledky</x-page-heading>

    <div class="space-y-6">
        @if($jobs->isEmpty())
            <h3 class="font-bold text-xl text-center"> Žádné odpovídající výsledky!</h3>
        @else
            @foreach($jobs as $job)
                <x-job-card-wide :$job />
            @endforeach
        @endif
    </div>
</x-layout>
