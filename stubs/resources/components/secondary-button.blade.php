<button {{ $attributes->merge(['type' => 'button', 'class' => 'rounded-sm settingSecondaryBackgroundColor settingFontColorOnDarkBackground border border-black px-2 py-1 text-xs font-semibold text-black shadow-sm']) }}>
    {{ $slot }}
</button>
