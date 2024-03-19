@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-gray-50 text-font_secondary bg-primary no-underline group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold flex flex gap-x-3'
            : 'text-font_primary group flex gap-x-3 rounded-md no-underline p-2 text-sm leading-6 font-semibold flex flex gap-x-3';
@endphp


<li>
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
    @if(isset($badge))
{{$badge}}
@endif
</a>

</li>



