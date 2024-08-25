@props(['name', 'label'])

<div class="inline-flex items-center gap-x-2">
    <span class="w-0 h-0 
        border-l-[5px] border-l-transparent
        border-b-[10px] border-b-white-500
        border-r-[5px] border-r-transparent">
    </span>
    
    <label class="font-bold" for="{{ $name }}">{{ $label }}</label>
</div>