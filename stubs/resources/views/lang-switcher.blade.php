<ul class="flex items-center space-x-1">
    @foreach (config('starterkid.locales') as $locale)
        <li>
            <a class="text-xs settingFontColor" href="{{ route('change.locale', $locale) }}">{{ strtoupper($locale) }}</a>
        </li>
    @endforeach
</ul>