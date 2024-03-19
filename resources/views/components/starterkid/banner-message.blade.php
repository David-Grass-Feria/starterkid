@if(isset($settingBannerMessage))
@if($settingBannerMessage !== '')
<div class="settingPrimaryBackgroundColor p-2 h-8 text-xs text-center settingFontColorOnDarkBackground">{!!$settingBannerMessage ?? ''!!}</div>
@endif
@endif