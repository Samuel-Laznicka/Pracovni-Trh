<x-layout>    
        <x-page-heading>Nabízené pozice</x-page-heading>
        
        <section class="pt-10"> <!--mt-6 space-y-6-->
                <div class="mt-6 space-y-6">
                    @foreach ($jobs as $job)
                        <x-company-card :$job/>
                    @endforeach
                </div>
        </section>
        
        <div>
            {{ $jobs->links() }}
        </div>
</x-layout>