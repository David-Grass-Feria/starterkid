<ul class="flex items-center space-x-1">
    @foreach (config('starterkid.locales') as $locale)
        <li>
            @if(session('locale') == $locale)
            <a class="text-xs settingFontColor underline" href="{{ route('change.locale', $locale) }}">{{ strtoupper($locale) }}</a>
            @else
            <a class="text-xs settingFontColor" href="{{ route('change.locale', $locale) }}">{{ strtoupper($locale) }}</a>
            @endif
        </li>
    @endforeach
</ul>