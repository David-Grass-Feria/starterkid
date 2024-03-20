@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block rounded-md border-0 py-1.5 text-font_primary shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-font_primary focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6']) !!}>
