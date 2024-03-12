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



  .content a {
    color: var(--settingPrimaryColor);
    text-decoration: underline;
  }

  .content p {
    font-size:1.2rem;
    font-weight: normal;
    color: #1C1C1C;
  }
  .content h1 {
    font-size:2.2rem;
    font-weight: bold;
    color: #111827;
  }
  .content h2 {
    font-size:1.4rem;
    font-weight: bold;
    color: #111827;
  }
</style>