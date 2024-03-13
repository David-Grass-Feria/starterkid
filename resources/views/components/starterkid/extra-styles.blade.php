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

  

  
  .prose a {
    color: var(--settingPrimaryColor);
    text-decoration: underline;
  }

 

  .prose figure {
    
    margin-top: -0.2em; /* Kleinere obere Abstände */
    margin-bottom: -0.2em; /* Kleinere untere Abstände */
 
  }

  .prose table.ball {
    width: 100px !important;
}

  .prose pre {
    
    margin-top: -0.2em; /* Kleinere obere Abstände */
    margin-bottom: -0.2em; /* Kleinere untere Abstände */
  }

  .prose p {
    color: #111827;
    font-size: 1.2rem;
    margin-top: -0.2em; /* Kleinere obere Abstände */
    margin-bottom: -0.2em; /* Kleinere untere Abstände */
  }

  .prose h2 {
    color: #111827;
    margin-top: -0.2em; /* Kleinere obere Abstände */
    margin-bottom: -0.2em; /* Kleinere untere Abstände */
  }

  .prose h3 {
    color: #111827;
    margin-top: -0.2em; /* Kleinere obere Abstände */
    margin-bottom: -0.2em; /* Kleinere untere Abstände */
  }

 .prose td {
  border: 1px solid gray;
}

.prose hr {
  border: 1px solid gray;
}



.ball {
    width: 100px;
}



  







</style>