@props(['job'])

<x-card class="flex gap-x-6">
    <div>
        <div>
            <x-employer-logo :employer="$job->employer" :width="90"/>
        </div>
    </div>

    <div class="flex-1 flex flex-col">
        <a href="{{$job->url}}" class="self-start text-sm text-gray-400 transition-colors duration-300"></a>

        <h3 class="font-bold text-xl mt-2 group-hover:text-blue-800">
            <a href="{{$job->url}}" target="_blank">
                {{ $job->employer->name }}
            </a>
        </h3>

        <a href="{{$job->url}}" target="_blank">
            <p class="text-sm text-gray-400 mt-2">Web page: {{ $job->url }}</p>
        </a>
    </div>
</x-card>