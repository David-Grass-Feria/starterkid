<div class="md:col-span-1 flex justify-between mb-5">
    <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium text-font_primary">{{ $title }}</h3>

        <p class="mt-1 text-sm text-font_primary">
            {{ $description }}
        </p>
    </div>

    <div class="px-4 sm:px-0">
        {{ $aside ?? '' }}
    </div>
</div>
