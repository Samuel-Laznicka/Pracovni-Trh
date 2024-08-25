@props(['job'])


<x-card class="flex gap-x-6">
    <div>
        <div>
            <x-employer-logo :employer="$job->employer" />
        </div>
    </div>

    <div class="flex-1 flex flex-col">
        <div class="self-start text-sm text-gray-400 transition-colors duration-300">{{ $job->employer->name }}</div>

        <h3 class="font-bold text-xl mt-2 group-hover:text-blue-800">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>

        <p class="text-sm text-gray-400 mt-2">{{ $job->salary }}</p>

        <div class="self-end">
            @foreach($job->tags->take(4) as $tag)
                <x-tag :$tag />
            @endforeach
        </div>
    </div>
</x-card>