<x-layout>    
        <x-page-heading>Nabízené pozice</x-page-heading>
        
        <section class="pt-10"> <!--mt-6 space-y-6-->
            @if($jobs->isEmpty())
                <h3 class="font-bold text-xl text-center">Žádné registrované firmy!</h3>
            @else
                <div class="mt-6 space-y-6">
                    @foreach ($jobs as $job)
                        <x-company-card :$job/>
                    @endforeach
                </div>
            @endif
        </section>
        
        <div>
            {{ $jobs->links() }}
        </div>
</x-layout>
