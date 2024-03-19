@if(isset($settingBannerMessage))
@if($settingBannerMessage !== '')
<div class="bg-primary p-2 h-8 text-xs text-center text-font_secondary">{!!$settingBannerMessage ?? ''!!}</div>
@endif
@endif