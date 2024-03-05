<style>
  :root {
      --settingPrimaryColor: {{ $settingPrimaryColor ?? config('starterkid.primary_color') }};
      --settingSecondaryColor: {{ $settingSecondaryColor ?? config('starterkid.secondary_color') }};
      --settingFontColor: {{ $settingFontColor ?? config('starterkid.font_color') }};
      --settingFontColorOnDarkBackground: {{ $settingFontColorOnDarkBackground ?? config('starterkid.font_color_on_dark_background') }};
      font-family: '{{$settingFontFamily ?? config('starterkid.font_familiy')}}', sans-serif;
  }

  

  .settingPrimaryBackgroundColor {
      background-color: var(--settingPrimaryColor);
  }

  .settingPrimaryColor {
      color: var(--settingPrimaryColor);
  }

  .settingSecondaryBackgroundColor {
      background-color: var(--settingSecondaryColor);
  }

  .settingPrimaryColorFocus:focus {
      --tw-ring-color: var(--settingPrimaryColor);
      border-color: var(--settingPrimaryColor);

  }

  .settingFontColor {
      color: var(--settingFontColor);
  }

  .settingFontColor::placeholder {
      color: var(--settingFontColor);
  }

  .settingFontColorOnDarkBackground {
      color: var(--settingFontColorOnDarkBackground);
  }


  input[type='checkbox'] {

      color: var(--settingPrimaryColor);

  }

  input[type='range'] {

      accent-color: var(--settingPrimaryColor);

  }

  body a {
    color: var(--settingPrimaryColor);
  }
</style>