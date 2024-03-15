@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm settingFontColor']) }}>
    {{ $value ?? $slot }}
</label>
