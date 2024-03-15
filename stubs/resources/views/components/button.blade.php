<button {{ $attributes->merge(['type' => 'submit', 'class' => 'rounded-sm settingPrimaryBackgroundColor px-2 py-1 text-xs font-semibold text-white shadow-sm']) }}>
    {{ $slot }}
</button>
