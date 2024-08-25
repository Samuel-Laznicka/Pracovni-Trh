@props(['active' => false])

<a class="{{ $active ? 'bg-red-900 text-white' : 'text-gray-300 hover:bg-gray-9000 hover:text-white'}} rounded-md px-3 py-2 text-base font-medium text-white" 
    aria-current="{{ $active ? 'page': 'false' }}"
    {{ $attributes }}
>{{ $slot }}</a>
