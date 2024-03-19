@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-font_primary']) }}>
    {{ $value ?? $slot }}
</label>
