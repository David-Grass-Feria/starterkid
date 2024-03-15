<button {{ $attributes->merge(['type' => 'button', 'class' => 'rounded bg-red-600 px-2 py-1 text-xs font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600']) }}>
    {{ $slot }}
</button>
