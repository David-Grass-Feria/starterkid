@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-font_primary focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-font_primary hover:text-font_primary hover:border-gray-300 focus:outline-none focus:text-font_primary focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<div class="flex items-center justify-around">
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
<x-starterkid::starterkid.badge>1</x-starterkid::starterkid.badge>
</div>
