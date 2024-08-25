<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-5">
            <h1 class="font-bold text-4xl">Najďete nejlepší pozici pro Vás</h1>
            
            <x-forms.form action="/search" class="mt-6">
                <x-forms.input :label="false" name="q" placeholder="Manager..." />
            </x-forms.form>
        </section>

        <x-forms.divider />
        
        <div class="text-center">
            @auth
                <div>
                    <a href="/create">
                        <x-forms.button type="submit">
                            Nabídnout práci
                        </x-forms.button>
                    </a>
                </div>
            @endauth
        </div>
        
        <section class="pt-10">
            <x-section-heading>Nedávno přidané pozice</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach($featured->take(12) as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Označení</x-section-heading>

            <div class="grid:gap-5 space-y-6">
                @foreach($tags->take(8) as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Dostupné pozice</x-section-heading>

            <div class="mt-6 space-y-6">
                @foreach($jobs->take(10) as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>

    </div>
</x-layout>