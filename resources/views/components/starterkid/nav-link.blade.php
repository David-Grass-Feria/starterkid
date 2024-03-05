@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-gray-50 text-white settingPrimaryBackgroundColor group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold flex flex gap-x-3'
            : 'settingFontColorOnDarkBackground group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold flex flex gap-x-3';
@endphp


<li>
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
    @if(isset($badge))
{{$badge}}
@endif
</a>

</li>



