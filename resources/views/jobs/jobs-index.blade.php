<x-layout>    
        <x-page-heading>Nabízené pozice</x-page-heading>
        
        <section class="pt-10"> <!--mt-6 space-y-6-->
                <div>
                    @if($jobs->isEmpty)
                        <h3 class="font-bold text-xl text-center">Žádné dostupné pozice!</h3>
                    @else
                        @foreach ($jobs as $job)
                            <x-job-card-wide :$job />
                            <a href="/jobs/{{ $job->id }}" :$job>
                                <x-forms.button class="mt-1 mb-5">
                                    Zobrazit pracovní pozici
                                </x-forms.button>
                            </a>
                        @endforeach
                    @endif
                </div>
        </section>
        
        <div>
            {{ $jobs->links() }}
        </div>
    </x-layout>
