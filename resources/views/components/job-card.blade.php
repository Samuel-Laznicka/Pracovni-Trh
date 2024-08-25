@props(['job', 'featuredJobs'])

<x-card class="flex flex-col">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>

    <div class="py-8">
        <h3 class="font-bold group-hover:text-red-500 text-xl transitions-colors duration-300">
            <a href="{{ $job->url }}" target="blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-sm mt-4">{{ $job->salary }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($job->tags->take(4) as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>

        <div>
            <x-employer-logo :employer="$job->employer" :width="100"/>
        </div>
    </div>
</x-card>