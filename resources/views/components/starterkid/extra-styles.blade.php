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

  .settingPrimaryFontColor {
      color: var(--settingPrimaryColor);
  }

  .settingFontColor::placeholder {
      color: var(--settingFontColor);
  }

  .settingFontColorOnDarkBackground {
      color: var(--settingFontColorOnDarkBackground);
      
  }

  .settingPrimaryBorderColor{
    border: solid 1px var(--settingPrimaryColor);
  }

  .settingPrimaryBorderColorLeft{
    border-left: solid 2px var(--settingPrimaryColor);
  }

  .settingSecondaryBorderColor{
    border: solid 1px var(--settingSecondaryColor);
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
    color: var(--settingFontColor);
    font-size: 1.2rem;
    margin-top: -0.2em; /* Kleinere obere Abstände */
    margin-bottom: -0.2em; /* Kleinere untere Abstände */
  }

  .prose h2 {
    color: var(--settingFontColor);
    margin-top: -0.2em; /* Kleinere obere Abstände */
    margin-bottom: -0.2em; /* Kleinere untere Abstände */
  }

  .prose h3 {
    color: var(--settingFontColor);
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