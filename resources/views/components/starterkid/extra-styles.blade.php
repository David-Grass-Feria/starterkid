<style>
 
 body {
  font-family: {{config('starterkid.font_familiy')}};
 }

 .prose h2.anchored::before {
    content: "";
    display: block;
    height: 100px; /* Höhe der Navbar anpassen */
    margin-top: -100px; /* Gleicher Wert, aber negativ */
    visibility: hidden;
    pointer-events: none;
}

  
  .prose a {
    
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
    
    font-size: 1.2rem;
    margin-top: -0.2em; /* Kleinere obere Abstände */
    margin-bottom: -0.2em; /* Kleinere untere Abstände */
  }

  .prose h2 {
    
    margin-top: -0.2em; /* Kleinere obere Abstände */
    margin-bottom: -0.2em; /* Kleinere untere Abstände */
  }

  .prose h3 {
   
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

<style>

*,:before,:after {
    box-sizing: border-box;
    border-width: 0;
    border-style: solid;
    border-color: #e5e7eb
}

:before,:after {
    --tw-content: ""
}

html,:host {
    line-height: 1.5;
    -webkit-text-size-adjust: 100%;
    -moz-tab-size: 4;
    -o-tab-size: 4;
    tab-size: 4;
    font-family: Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji";
    font-feature-settings: normal;
    font-variation-settings: normal;
    -webkit-tap-highlight-color: transparent
}

body {
    margin: 0;
    line-height: inherit
}

hr {
    height: 0;
    color: inherit;
    border-top-width: 1px
}

abbr:where([title]) {
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted
}

h1,h2,h3,h4,h5,h6 {
    font-size: inherit;
    font-weight: inherit
}

a {
    color: inherit;
    text-decoration: inherit
}

b,strong {
    font-weight: bolder
}

code,kbd,samp,pre {
    font-family: ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;
    font-feature-settings: normal;
    font-variation-settings: normal;
    font-size: 1em
}

small {
    font-size: 80%
}

sub,sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline
}

sub {
    bottom: -.25em
}

sup {
    top: -.5em
}

table {
    text-indent: 0;
    border-color: inherit;
    border-collapse: collapse
}

button,input,optgroup,select,textarea {
    font-family: inherit;
    font-feature-settings: inherit;
    font-variation-settings: inherit;
    font-size: 100%;
    font-weight: inherit;
    line-height: inherit;
    color: inherit;
    margin: 0;
    padding: 0
}

button,select {
    text-transform: none
}

button,[type=button],[type=reset],[type=submit] {
    -webkit-appearance: button;
    background-color: transparent;
    background-image: none
}

:-moz-focusring {
    outline: auto
}

:-moz-ui-invalid {
    box-shadow: none
}

progress {
    vertical-align: baseline
}

::-webkit-inner-spin-button,::-webkit-outer-spin-button {
    height: auto
}

[type=search] {
    -webkit-appearance: textfield;
    outline-offset: -2px
}

::-webkit-search-decoration {
    -webkit-appearance: none
}

::-webkit-file-upload-button {
    -webkit-appearance: button;
    font: inherit
}

summary {
    display: list-item
}

blockquote,dl,dd,h1,h2,h3,h4,h5,h6,hr,figure,p,pre {
    margin: 0
}

fieldset {
    margin: 0;
    padding: 0
}

legend {
    padding: 0
}

ol,ul,menu {
    list-style: none;
    margin: 0;
    padding: 0
}

dialog {
    padding: 0
}

textarea {
    resize: vertical
}

input::-moz-placeholder,textarea::-moz-placeholder {
    opacity: 1;
    color: #9ca3af
}

input::placeholder,textarea::placeholder {
    opacity: 1;
    color: #9ca3af
}

button,[role=button] {
    cursor: pointer
}

:disabled {
    cursor: default
}

img,svg,video,canvas,audio,iframe,embed,object {
    display: block;
    vertical-align: middle
}

img,video {
    max-width: 100%;
    height: auto
}

[hidden] {
    display: none
}

[type=text],input:where(:not([type])),[type=email],[type=url],[type=password],[type=number],[type=date],[type=datetime-local],[type=month],[type=search],[type=tel],[type=time],[type=week],[multiple],textarea,select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: #fff;
    border-color: #6b7280;
    border-width: 1px;
    border-radius: 0;
    padding: .5rem .75rem;
    font-size: 1rem;
    line-height: 1.5rem;
    --tw-shadow: 0 0 #0000
}

[type=text]:focus,input:where(:not([type])):focus,[type=email]:focus,[type=url]:focus,[type=password]:focus,[type=number]:focus,[type=date]:focus,[type=datetime-local]:focus,[type=month]:focus,[type=search]:focus,[type=tel]:focus,[type=time]:focus,[type=week]:focus,[multiple]:focus,textarea:focus,select:focus {
    outline: 2px solid transparent;
    outline-offset: 2px;
    --tw-ring-inset: var(--tw-empty, );
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: #2563eb;
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow);
    border-color: #2563eb
}

input::-moz-placeholder,textarea::-moz-placeholder {
    color: #6b7280;
    opacity: 1
}

input::placeholder,textarea::placeholder {
    color: #6b7280;
    opacity: 1
}

::-webkit-datetime-edit-fields-wrapper {
    padding: 0
}

::-webkit-date-and-time-value {
    min-height: 1.5em;
    text-align: inherit
}

::-webkit-datetime-edit {
    display: inline-flex
}

::-webkit-datetime-edit,::-webkit-datetime-edit-year-field,::-webkit-datetime-edit-month-field,::-webkit-datetime-edit-day-field,::-webkit-datetime-edit-hour-field,::-webkit-datetime-edit-minute-field,::-webkit-datetime-edit-second-field,::-webkit-datetime-edit-millisecond-field,::-webkit-datetime-edit-meridiem-field {
    padding-top: 0;
    padding-bottom: 0
}

select {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
    background-position: right .5rem center;
    background-repeat: no-repeat;
    background-size: 1.5em 1.5em;
    padding-right: 2.5rem;
    -webkit-print-color-adjust: exact;
    print-color-adjust: exact
}

[multiple],[size]:where(select:not([size="1"])) {
    background-image: initial;
    background-position: initial;
    background-repeat: unset;
    background-size: initial;
    padding-right: .75rem;
    -webkit-print-color-adjust: unset;
    print-color-adjust: unset
}

[type=checkbox],[type=radio] {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    padding: 0;
    -webkit-print-color-adjust: exact;
    print-color-adjust: exact;
    display: inline-block;
    vertical-align: middle;
    background-origin: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    flex-shrink: 0;
    height: 1rem;
    width: 1rem;
    color: #2563eb;
    background-color: #fff;
    border-color: #6b7280;
    border-width: 1px;
    --tw-shadow: 0 0 #0000
}

[type=checkbox] {
    border-radius: 0
}

[type=radio] {
    border-radius: 100%
}

[type=checkbox]:focus,[type=radio]:focus {
    outline: 2px solid transparent;
    outline-offset: 2px;
    --tw-ring-inset: var(--tw-empty, );
    --tw-ring-offset-width: 2px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: #2563eb;
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)
}

[type=checkbox]:checked,[type=radio]:checked {
    border-color: transparent;
    background-color: currentColor;
    background-size: 100% 100%;
    background-position: center;
    background-repeat: no-repeat
}

[type=checkbox]:checked {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e")
}

@media (forced-colors: active) {
    [type=checkbox]:checked {
        -webkit-appearance: auto;
        -moz-appearance: auto;
        appearance: auto
    }
}

[type=radio]:checked {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e")
}

@media (forced-colors: active) {
    [type=radio]:checked {
        -webkit-appearance: auto;
        -moz-appearance: auto;
        appearance: auto
    }
}

[type=checkbox]:checked:hover,[type=checkbox]:checked:focus,[type=radio]:checked:hover,[type=radio]:checked:focus {
    border-color: transparent;
    background-color: currentColor
}

[type=checkbox]:indeterminate {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3e%3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3e%3c/svg%3e");
    border-color: transparent;
    background-color: currentColor;
    background-size: 100% 100%;
    background-position: center;
    background-repeat: no-repeat
}

@media (forced-colors: active) {
    [type=checkbox]:indeterminate {
        -webkit-appearance: auto;
        -moz-appearance: auto;
        appearance: auto
    }
}

[type=checkbox]:indeterminate:hover,[type=checkbox]:indeterminate:focus {
    border-color: transparent;
    background-color: currentColor
}

[type=file] {
    background: unset;
    border-color: inherit;
    border-width: 0;
    border-radius: 0;
    padding: 0;
    font-size: unset;
    line-height: inherit
}

[type=file]:focus {
    outline: 1px solid ButtonText;
    outline: 1px auto -webkit-focus-ring-color
}

*,:before,:after {
    --tw-border-spacing-x: 0;
    --tw-border-spacing-y: 0;
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    --tw-pan-x: ;
    --tw-pan-y: ;
    --tw-pinch-zoom: ;
    --tw-scroll-snap-strictness: proximity;
    --tw-gradient-from-position: ;
    --tw-gradient-via-position: ;
    --tw-gradient-to-position: ;
    --tw-ordinal: ;
    --tw-slashed-zero: ;
    --tw-numeric-figure: ;
    --tw-numeric-spacing: ;
    --tw-numeric-fraction: ;
    --tw-ring-inset: ;
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgb(59 130 246 / .5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    --tw-blur: ;
    --tw-brightness: ;
    --tw-contrast: ;
    --tw-grayscale: ;
    --tw-hue-rotate: ;
    --tw-invert: ;
    --tw-saturate: ;
    --tw-sepia: ;
    --tw-drop-shadow: ;
    --tw-backdrop-blur: ;
    --tw-backdrop-brightness: ;
    --tw-backdrop-contrast: ;
    --tw-backdrop-grayscale: ;
    --tw-backdrop-hue-rotate: ;
    --tw-backdrop-invert: ;
    --tw-backdrop-opacity: ;
    --tw-backdrop-saturate: ;
    --tw-backdrop-sepia:
}

::backdrop {
    --tw-border-spacing-x: 0;
    --tw-border-spacing-y: 0;
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    --tw-pan-x: ;
    --tw-pan-y: ;
    --tw-pinch-zoom: ;
    --tw-scroll-snap-strictness: proximity;
    --tw-gradient-from-position: ;
    --tw-gradient-via-position: ;
    --tw-gradient-to-position: ;
    --tw-ordinal: ;
    --tw-slashed-zero: ;
    --tw-numeric-figure: ;
    --tw-numeric-spacing: ;
    --tw-numeric-fraction: ;
    --tw-ring-inset: ;
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgb(59 130 246 / .5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    --tw-blur: ;
    --tw-brightness: ;
    --tw-contrast: ;
    --tw-grayscale: ;
    --tw-hue-rotate: ;
    --tw-invert: ;
    --tw-saturate: ;
    --tw-sepia: ;
    --tw-drop-shadow: ;
    --tw-backdrop-blur: ;
    --tw-backdrop-brightness: ;
    --tw-backdrop-contrast: ;
    --tw-backdrop-grayscale: ;
    --tw-backdrop-hue-rotate: ;
    --tw-backdrop-invert: ;
    --tw-backdrop-opacity: ;
    --tw-backdrop-saturate: ;
    --tw-backdrop-sepia:
}

.container {
    width: 100%
}

@media (min-width: 640px) {
    .container {
        max-width:640px
    }
}

@media (min-width: 768px) {
    .container {
        max-width:768px
    }
}

@media (min-width: 1024px) {
    .container {
        max-width:1024px
    }
}

@media (min-width: 1280px) {
    .container {
        max-width:1280px
    }
}

@media (min-width: 1536px) {
    .container {
        max-width:1536px
    }
}

.prose {
    color: var(--tw-prose-body);
    max-width: 65ch
}

.prose :where(p):not(:where([class~=not-prose],[class~=not-prose] *)) {
    margin-top: 1.25em;
    margin-bottom: 1.25em
}

.prose :where([class~=lead]):not(:where([class~=not-prose],[class~=not-prose] *)) {
    color: var(--tw-prose-lead);
    font-size: 1.25em;
    line-height: 1.6;
    margin-top: 1.2em;
    margin-bottom: 1.2em
}

.prose :where(a):not(:where([class~=not-prose],[class~=not-prose] *)) {
    color: var(--tw-prose-links);
    text-decoration: underline;
    font-weight: 500
}

.prose :where(strong):not(:where([class~=not-prose],[class~=not-prose] *)) {
    color: var(--tw-prose-bold);
    font-weight: 600
}

.prose :where(a strong):not(:where([class~=not-prose],[class~=not-prose] *)) {
    color: inherit
}

.prose :where(blockquote strong):not(:where([class~=not-prose],[class~=not-prose] *)) {
    color: inherit
}

.prose :where(thead th strong):not(:where([class~=not-prose],[class~=not-prose] *)) {
    color: inherit
}

.prose :where(ol):not(:where([class~=not-prose],[class~=not-prose] *)) {
    list-style-type: decimal;
    margin-top: 1.25em;
    margin-bottom: 1.25em;
    padding-left: 1.625em
}

.prose :where(ol[type=A]):not(:where([class~=not-prose],[class~=not-prose] *)) {
    list-style-type: upper-alpha
}

.prose :where(ol[type=a]):not(:where([class~=not-prose],[class~=not-prose] *)) {
    list-style-type: lower-alpha
}

.prose :where(ol[type=A s]):not(:where([class~=not-prose],[class~=not-prose] *)) {
    list-style-type: upper-alpha
}

.prose :where(ol[type=a s]):not(:where([class~=not-prose],[class~=not-prose] *)) {
    list-style-type: lower-alpha
}

.prose :where(ol[type=I]):not(:where([class~=not-prose],[class~=not-prose] *)) {
    list-style-type: upper-roman
}

.prose :where(ol[type=i]):not(:where([class~=not-prose],[class~=not-prose] *)) {
    list-style-type: lower-roman
}

.prose :where(ol[type=I s]):not(:where([class~=not-prose],[class~=not-prose] *)) {
    list-style-type: upper-roman
}

.prose :where(ol[type=i s]):not(:where([class~=not-prose],[class~=not-prose] *)) {
    list-style-type: lower-roman
}

.prose :where(ol[type="1"]):not(:where([class~=not-prose],[class~=not-prose] *)) {
    list-style-type: decimal
}

.prose :where(ul):not(:where([class~=not-prose],[class~=not-prose] *)) {
    list-style-type: disc;
    margin-top: 1.25em;
    margin-bottom: 1.25em;
    padding-left: 1.625em
}

.prose :where(ol>li):not(:where([class~=not-prose],[class~=not-prose] *))::marker {
    font-weight: 400;
    color: var(--tw-prose-counters)
}

.prose :where(ul>li):not(:where([class~=not-prose],[class~=not-prose] *))::marker {
    color: var(--tw-prose-bullets)
}

.prose :where(dt):not(:where([class~=not-prose],[class~=not-prose] *)) {
    color: var(--tw-prose-headings);
    font-weight: 600;
    margin-top: 1.25em
}

.prose :where(hr):not(:where([class~=not-prose],[class~=not-prose] *)) {
    border-color: var(--tw-prose-hr);
    border-top-width: 1px;
    margin-top: 3em;
    margin-bottom: 3em
}

.prose :where(blockquote):not(:where([class~=not-prose],[class~=not-prose] *)) {
    font-weight: 500;
    font-style: italic;
    color: var(--tw-prose-quotes);
    border-left-width: .25rem;
    border-left-color: var(--tw-prose-quote-borders);
    quotes: "“""”""‘""’";
    margin-top: 1.6em;
    margin-bottom: 1.6em;
    padding-left: 1em
}

.prose :where(blockquote p:first-of-type):not(:where([class~=not-prose],[class~=not-prose] *)):before {
    content: open-quote
}

.prose :where(blockquote p:last-of-type):not(:where([class~=not-prose],[class~=not-prose] *)):after {
    content: close-quote
}

.prose :where(h1):not(:where([class~=not-prose],[class~=not-prose] *)) {
    color: var(--tw-prose-headings);
    font-weight: 800;
    font-size: 2.25em;
    margin-top: 0;
    margin-bottom: .8888889em;
    line-height: 1.1111111
}

.prose :where(h1 strong):not(:where([class~=not-prose],[class~=not-prose] *)) {
    font-weight: 900;
    color: inherit
}

.prose :where(h2):not(:where([class~=not-prose],[class~=not-prose] *)) {
    color: var(--tw-prose-headings);
    font-weight: 700;
    font-size: 1.5em;
    margin-top: 2em;
    margin-bottom: 1em;
    line-height: 1.3333333
}

.prose :where(h2 strong):not(:where([class~=not-prose],[class~=not-prose] *)) {
    font-weight: 800;
    color: inherit
}

.prose :where(h3):not(:where([class~=not-prose],[class~=not-prose] *)) {
    color: var(--tw-prose-headings);
    font-weight: 600;
    font-size: 1.25em;
    margin-top: 1.6em;
    margin-bottom: .6em;
    line-height: 1.6
}

.prose :where(h3 strong):not(:where([class~=not-prose],[class~=not-prose] *)) {
    font-weight: 700;
    color: inherit
}

.prose :where(h4):not(:where([class~=not-prose],[class~=not-prose] *)) {
    color: var(--tw-prose-headings);
    font-weight: 600;
    margin-top: 1.5em;
    margin-bottom: .5em;
    line-height: 1.5
}

.prose :where(h4 strong):not(:where([class~=not-prose],[class~=not-prose] *)) {
    font-weight: 700;
    color: inherit
}

.prose :where(img):not(:where([class~=not-prose],[class~=not-prose] *)) {
    margin-top: 2em;
    margin-bottom: 2em
}

.prose :where(picture):not(:where([class~=not-prose],[class~=not-prose] *)) {
    display: block;
    margin-top: 2em;
    margin-bottom: 2em
}

.prose :where(kbd):not(:where([class~=not-prose],[class~=not-prose] *)) {
    font-weight: 500;
    font-family: inherit;
    color: var(--tw-prose-kbd);
    box-shadow: 0 0 0 1px rgb(var(--tw-prose-kbd-shadows) / 10%),0 3px rgb(var(--tw-prose-kbd-shadows) / 10%);
    font-size: .875em;
    border-radius: .3125rem;
    padding: .1875em .375em
}

.prose :where(code):not(:where([class~=not-prose],[class~=not-prose] *)) {
    color: var(--tw-prose-code);
    font-weight: 600;
    font-size: .875em
}

.prose :where(code):not(:where([class~=not-prose],[class~=not-prose] *)):before {
    content: "`"
}

.prose :where(code):not(:where([class~=not-prose],[class~=not-prose] *)):after {
    content: "`"
}

.prose :where(a code):not(:where([class~=not-prose],[class~=not-prose] *)) {
    color: inherit
}

.prose :where(h1 code):not(:where([class~=not-prose],[class~=not-prose] *)) {
    color: inherit
}

.prose :where(h2 code):not(:where([class~=not-prose],[class~=not-prose] *)) {
    color: inherit;
    font-size: .875em
}

.prose :where(h3 code):not(:where([class~=not-prose],[class~=not-prose] *)) {
    color: inherit;
    font-size: .9em
}

.prose :where(h4 code):not(:where([class~=not-prose],[class~=not-prose] *)) {
    color: inherit
}

.prose :where(blockquote code):not(:where([class~=not-prose],[class~=not-prose] *)) {
    color: inherit
}

.prose :where(thead th code):not(:where([class~=not-prose],[class~=not-prose] *)) {
    color: inherit
}

.prose :where(pre):not(:where([class~=not-prose],[class~=not-prose] *)) {
    color: var(--tw-prose-pre-code);
    background-color: var(--tw-prose-pre-bg);
    overflow-x: auto;
    font-weight: 400;
    font-size: .875em;
    line-height: 1.7142857;
    margin-top: 1.7142857em;
    margin-bottom: 1.7142857em;
    border-radius: .375rem;
    padding: .8571429em 1.1428571em
}

.prose :where(pre code):not(:where([class~=not-prose],[class~=not-prose] *)) {
    background-color: transparent;
    border-width: 0;
    border-radius: 0;
    padding: 0;
    font-weight: inherit;
    color: inherit;
    font-size: inherit;
    font-family: inherit;
    line-height: inherit
}

.prose :where(pre code):not(:where([class~=not-prose],[class~=not-prose] *)):before {
    content: none
}

.prose :where(pre code):not(:where([class~=not-prose],[class~=not-prose] *)):after {
    content: none
}

.prose :where(table):not(:where([class~=not-prose],[class~=not-prose] *)) {
    width: 100%;
    table-layout: auto;
    text-align: left;
    margin-top: 2em;
    margin-bottom: 2em;
    font-size: .875em;
    line-height: 1.7142857
}

.prose :where(thead):not(:where([class~=not-prose],[class~=not-prose] *)) {
    border-bottom-width: 1px;
    border-bottom-color: var(--tw-prose-th-borders)
}

.prose :where(thead th):not(:where([class~=not-prose],[class~=not-prose] *)) {
    color: var(--tw-prose-headings);
    font-weight: 600;
    vertical-align: bottom;
    padding-right: .5714286em;
    padding-bottom: .5714286em;
    padding-left: .5714286em
}

.prose :where(tbody tr):not(:where([class~=not-prose],[class~=not-prose] *)) {
    border-bottom-width: 1px;
    border-bottom-color: var(--tw-prose-td-borders)
}

.prose :where(tbody tr:last-child):not(:where([class~=not-prose],[class~=not-prose] *)) {
    border-bottom-width: 0
}

.prose :where(tbody td):not(:where([class~=not-prose],[class~=not-prose] *)) {
    vertical-align: baseline
}

.prose :where(tfoot):not(:where([class~=not-prose],[class~=not-prose] *)) {
    border-top-width: 1px;
    border-top-color: var(--tw-prose-th-borders)
}

.prose :where(tfoot td):not(:where([class~=not-prose],[class~=not-prose] *)) {
    vertical-align: top
}

.prose :where(figure>*):not(:where([class~=not-prose],[class~=not-prose] *)) {
    margin-top: 0;
    margin-bottom: 0
}

.prose :where(figcaption):not(:where([class~=not-prose],[class~=not-prose] *)) {
    color: var(--tw-prose-captions);
    font-size: .875em;
    line-height: 1.4285714;
    margin-top: .8571429em
}

.prose {
    --tw-prose-body: #374151;
    --tw-prose-headings: #111827;
    --tw-prose-lead: #4b5563;
    --tw-prose-links: #111827;
    --tw-prose-bold: #111827;
    --tw-prose-counters: #6b7280;
    --tw-prose-bullets: #d1d5db;
    --tw-prose-hr: #e5e7eb;
    --tw-prose-quotes: #111827;
    --tw-prose-quote-borders: #e5e7eb;
    --tw-prose-captions: #6b7280;
    --tw-prose-kbd: #111827;
    --tw-prose-kbd-shadows: 17 24 39;
    --tw-prose-code: #111827;
    --tw-prose-pre-code: #e5e7eb;
    --tw-prose-pre-bg: #1f2937;
    --tw-prose-th-borders: #d1d5db;
    --tw-prose-td-borders: #e5e7eb;
    --tw-prose-invert-body: #d1d5db;
    --tw-prose-invert-headings: #fff;
    --tw-prose-invert-lead: #9ca3af;
    --tw-prose-invert-links: #fff;
    --tw-prose-invert-bold: #fff;
    --tw-prose-invert-counters: #9ca3af;
    --tw-prose-invert-bullets: #4b5563;
    --tw-prose-invert-hr: #374151;
    --tw-prose-invert-quotes: #f3f4f6;
    --tw-prose-invert-quote-borders: #374151;
    --tw-prose-invert-captions: #9ca3af;
    --tw-prose-invert-kbd: #fff;
    --tw-prose-invert-kbd-shadows: 255 255 255;
    --tw-prose-invert-code: #fff;
    --tw-prose-invert-pre-code: #d1d5db;
    --tw-prose-invert-pre-bg: rgb(0 0 0 / 50%);
    --tw-prose-invert-th-borders: #4b5563;
    --tw-prose-invert-td-borders: #374151;
    font-size: 1rem;
    line-height: 1.75
}

.prose :where(picture>img):not(:where([class~=not-prose],[class~=not-prose] *)) {
    margin-top: 0;
    margin-bottom: 0
}

.prose :where(video):not(:where([class~=not-prose],[class~=not-prose] *)) {
    margin-top: 2em;
    margin-bottom: 2em
}

.prose :where(li):not(:where([class~=not-prose],[class~=not-prose] *)) {
    margin-top: .5em;
    margin-bottom: .5em
}

.prose :where(ol>li):not(:where([class~=not-prose],[class~=not-prose] *)) {
    padding-left: .375em
}

.prose :where(ul>li):not(:where([class~=not-prose],[class~=not-prose] *)) {
    padding-left: .375em
}

.prose :where(.prose>ul>li p):not(:where([class~=not-prose],[class~=not-prose] *)) {
    margin-top: .75em;
    margin-bottom: .75em
}

.prose :where(.prose>ul>li>*:first-child):not(:where([class~=not-prose],[class~=not-prose] *)) {
    margin-top: 1.25em
}

.prose :where(.prose>ul>li>*:last-child):not(:where([class~=not-prose],[class~=not-prose] *)) {
    margin-bottom: 1.25em
}

.prose :where(.prose>ol>li>*:first-child):not(:where([class~=not-prose],[class~=not-prose] *)) {
    margin-top: 1.25em
}

.prose :where(.prose>ol>li>*:last-child):not(:where([class~=not-prose],[class~=not-prose] *)) {
    margin-bottom: 1.25em
}

.prose :where(ul ul,ul ol,ol ul,ol ol):not(:where([class~=not-prose],[class~=not-prose] *)) {
    margin-top: .75em;
    margin-bottom: .75em
}

.prose :where(dl):not(:where([class~=not-prose],[class~=not-prose] *)) {
    margin-top: 1.25em;
    margin-bottom: 1.25em
}

.prose :where(dd):not(:where([class~=not-prose],[class~=not-prose] *)) {
    margin-top: .5em;
    padding-left: 1.625em
}

.prose :where(hr+*):not(:where([class~=not-prose],[class~=not-prose] *)) {
    margin-top: 0
}

.prose :where(h2+*):not(:where([class~=not-prose],[class~=not-prose] *)) {
    margin-top: 0
}

.prose :where(h3+*):not(:where([class~=not-prose],[class~=not-prose] *)) {
    margin-top: 0
}

.prose :where(h4+*):not(:where([class~=not-prose],[class~=not-prose] *)) {
    margin-top: 0
}

.prose :where(thead th:first-child):not(:where([class~=not-prose],[class~=not-prose] *)) {
    padding-left: 0
}

.prose :where(thead th:last-child):not(:where([class~=not-prose],[class~=not-prose] *)) {
    padding-right: 0
}

.prose :where(tbody td,tfoot td):not(:where([class~=not-prose],[class~=not-prose] *)) {
    padding: .5714286em
}

.prose :where(tbody td:first-child,tfoot td:first-child):not(:where([class~=not-prose],[class~=not-prose] *)) {
    padding-left: 0
}

.prose :where(tbody td:last-child,tfoot td:last-child):not(:where([class~=not-prose],[class~=not-prose] *)) {
    padding-right: 0
}

.prose :where(figure):not(:where([class~=not-prose],[class~=not-prose] *)) {
    margin-top: 2em;
    margin-bottom: 2em
}

.prose :where(.prose>:first-child):not(:where([class~=not-prose],[class~=not-prose] *)) {
    margin-top: 0
}

.prose :where(.prose>:last-child):not(:where([class~=not-prose],[class~=not-prose] *)) {
    margin-bottom: 0
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0,0,0,0);
    white-space: nowrap;
    border-width: 0
}

.pointer-events-none {
    pointer-events: none
}

.pointer-events-auto {
    pointer-events: auto
}

.fixed {
    position: fixed
}

.absolute {
    position: absolute
}

.relative {
    position: relative
}

.sticky {
    position: sticky
}

.-inset-2 {
    top: -.5rem;
    right: -.5rem;
    bottom: -.5rem;
    left: -.5rem
}

.-inset-2\.5 {
    top: -.625rem;
    right: -.625rem;
    bottom: -.625rem;
    left: -.625rem
}

.inset-0 {
    top: 0;
    right: 0;
    bottom: 0;
    left: 0
}

.inset-y-0 {
    top: 0;
    bottom: 0
}

.-bottom-16 {
    bottom: -4rem
}

.-left-16 {
    left: -4rem
}

.-left-20 {
    left: -5rem
}

.bottom-0 {
    bottom: 0
}

.bottom-1 {
    bottom: .25rem
}

.end-0 {
    inset-inline-end: 0px
}

.left-0 {
    left: 0
}

.left-1 {
    left: .25rem
}

.left-4 {
    left: 1rem
}

.left-full {
    left: 100%
}

.right-0 {
    right: 0
}

.start-0 {
    inset-inline-start: 0px
}

.top-0 {
    top: 0
}

.top-1 {
    top: .25rem
}

.top-4 {
    top: 1rem
}

.isolate {
    isolation: isolate
}

.z-0 {
    z-index: 0
}

.z-10 {
    z-index: 10
}

.z-40 {
    z-index: 40
}

.z-50 {
    z-index: 50
}

.col-span-1 {
    grid-column: span 1 / span 1
}

.col-span-12 {
    grid-column: span 12 / span 12
}

.col-span-6 {
    grid-column: span 6 / span 6
}

.\!row-span-1 {
    grid-row: span 1 / span 1!important
}

.float-right {
    float: right
}

.-m-1 {
    margin: -.25rem
}

.-m-1\.5 {
    margin: -.375rem
}

.-m-2 {
    margin: -.5rem
}

.-m-2\.5 {
    margin: -.625rem
}

.-mx-2 {
    margin-left: -.5rem;
    margin-right: -.5rem
}

.-mx-3 {
    margin-left: -.75rem;
    margin-right: -.75rem
}

.-mx-4 {
    margin-left: -1rem;
    margin-right: -1rem
}

.-my-2 {
    margin-top: -.5rem;
    margin-bottom: -.5rem
}

.-my-6 {
    margin-top: -1.5rem;
    margin-bottom: -1.5rem
}

.mx-auto {
    margin-left: auto;
    margin-right: auto
}

.-mb-8 {
    margin-bottom: -2rem
}

.-me-0 {
    margin-inline-end:-0px}

.-me-0\.5 {
    margin-inline-end:-.125rem}

.-me-1 {
    margin-inline-end:-.25rem}

.-me-2 {
    margin-inline-end:-.5rem}

.-ml-1 {
    margin-left: -.25rem
}

.-ml-px {
    margin-left: -1px
}

.-mt-2 {
    margin-top: -.5rem
}

.-mt-px {
    margin-top: -1px
}

.mb-0 {
    margin-bottom: 0
}

.mb-4 {
    margin-bottom: 1rem
}

.mb-5 {
    margin-bottom: 1.25rem
}

.mb-6 {
    margin-bottom: 1.5rem
}

.me-2 {
    margin-inline-end:.5rem}

.me-3 {
    margin-inline-end:.75rem}

.ml-1 {
    margin-left: .25rem
}

.ml-12 {
    margin-left: 3rem
}

.ml-2 {
    margin-left: .5rem
}

.ml-3 {
    margin-left: .75rem
}

.ml-4 {
    margin-left: 1rem
}

.ml-5 {
    margin-left: 1.25rem
}

.ml-auto {
    margin-left: auto
}

.mr-0 {
    margin-right: 0
}

.mr-0\.5 {
    margin-right: .125rem
}

.mr-16 {
    margin-right: 4rem
}

.mr-2 {
    margin-right: .5rem
}

.ms-1 {
    margin-inline-start:.25rem}

.ms-2 {
    margin-inline-start:.5rem}

.ms-3 {
    margin-inline-start:.75rem}

.ms-4 {
    margin-inline-start:1rem}

.ms-6 {
    margin-inline-start:1.5rem}

.mt-1 {
    margin-top: .25rem
}

.mt-10 {
    margin-top: 2.5rem
}

.mt-16 {
    margin-top: 4rem
}

.mt-2 {
    margin-top: .5rem
}

.mt-20 {
    margin-top: 5rem
}

.mt-3 {
    margin-top: .75rem
}

.mt-4 {
    margin-top: 1rem
}

.mt-5 {
    margin-top: 1.25rem
}

.mt-6 {
    margin-top: 1.5rem
}

.mt-8 {
    margin-top: 2rem
}

.line-clamp-3 {
    overflow: hidden;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3
}

.block {
    display: block
}

.inline-block {
    display: inline-block
}

.inline {
    display: inline
}

.flex {
    display: flex
}

.inline-flex {
    display: inline-flex
}

.table {
    display: table
}

.flow-root {
    display: flow-root
}

.grid {
    display: grid
}

.\!hidden {
    display: none!important
}

.hidden {
    display: none
}

.aspect-\[2\/2\] {
    aspect-ratio: 2/2
}

.aspect-video {
    aspect-ratio: 16 / 9
}

.size-12 {
    width: 3rem;
    height: 3rem
}

.size-5 {
    width: 1.25rem;
    height: 1.25rem
}

.size-6 {
    width: 1.5rem;
    height: 1.5rem
}

.h-10 {
    height: 2.5rem
}

.h-12 {
    height: 3rem
}

.h-16 {
    height: 4rem
}

.h-2 {
    height: .5rem
}

.h-20 {
    height: 5rem
}

.h-3 {
    height: .75rem
}

.h-32 {
    height: 8rem
}

.h-4 {
    height: 1rem
}

.h-40 {
    height: 10rem
}

.h-5 {
    height: 1.25rem
}

.h-6 {
    height: 1.5rem
}

.h-7 {
    height: 1.75rem
}

.h-8 {
    height: 2rem
}

.h-9 {
    height: 2.25rem
}

.h-full {
    height: 100%
}

.max-h-12 {
    max-height: 3rem
}

.min-h-screen {
    min-height: 100vh
}

.w-0 {
    width: 0px
}

.w-0\.5 {
    width: .125rem
}

.w-1\/2 {
    width: 50%
}

.w-10 {
    width: 2.5rem
}

.w-12 {
    width: 3rem
}

.w-14 {
    width: 3.5rem
}

.w-16 {
    width: 4rem
}

.w-2 {
    width: .5rem
}

.w-20 {
    width: 5rem
}

.w-3 {
    width: .75rem
}

.w-3\/4 {
    width: 75%
}

.w-32 {
    width: 8rem
}

.w-4 {
    width: 1rem
}

.w-48 {
    width: 12rem
}

.w-5 {
    width: 1.25rem
}

.w-6 {
    width: 1.5rem
}

.w-60 {
    width: 15rem
}

.w-8 {
    width: 2rem
}

.w-\[calc\(100\%\+8rem\)\] {
    width: calc(100% + 8rem)
}

.w-auto {
    width: auto
}

.w-full {
    width: 100%
}

.w-px {
    width: 1px
}

.w-screen {
    width: 100vw
}

.min-w-0 {
    min-width: 0px
}

.min-w-full {
    min-width: 100%
}

.max-w-2xl {
    max-width: 42rem
}

.max-w-40 {
    max-width: 10rem
}

.max-w-48 {
    max-width: 12rem
}

.max-w-6xl {
    max-width: 72rem
}

.max-w-7xl {
    max-width: 80rem
}

.max-w-\[1900px\] {
    max-width: 1900px
}

.max-w-\[400px\] {
    max-width: 400px
}

.max-w-\[877px\] {
    max-width: 877px
}

.max-w-full {
    max-width: 100%
}

.max-w-md {
    max-width: 28rem
}

.max-w-screen-xl {
    max-width: 1280px
}

.max-w-xl {
    max-width: 36rem
}

.max-w-xs {
    max-width: 20rem
}

.flex-1 {
    flex: 1 1 0%
}

.flex-none {
    flex: none
}

.flex-shrink-0,.shrink-0 {
    flex-shrink: 0
}

.flex-grow,.grow {
    flex-grow: 1
}

.origin-top {
    transform-origin: top
}

.translate-y-0 {
    --tw-translate-y: 0px;
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.translate-y-4 {
    --tw-translate-y: 1rem;
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.scale-100 {
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.scale-95 {
    --tw-scale-x: .95;
    --tw-scale-y: .95;
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.transform {
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

@keyframes pulse {
    50% {
        opacity: .5
    }
}

.animate-pulse {
    animation: pulse 2s cubic-bezier(.4,0,.6,1) infinite
}

.cursor-default {
    cursor: default
}

.cursor-pointer {
    cursor: pointer
}

.select-none {
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none
}

.resize {
    resize: both
}

.list-inside {
    list-style-position: inside
}

.list-disc {
    list-style-type: disc
}

.grid-cols-1 {
    grid-template-columns: repeat(1,minmax(0,1fr))
}

.grid-cols-12 {
    grid-template-columns: repeat(12,minmax(0,1fr))
}

.grid-cols-2 {
    grid-template-columns: repeat(2,minmax(0,1fr))
}

.grid-cols-6 {
    grid-template-columns: repeat(6,minmax(0,1fr))
}

.\!flex-row {
    flex-direction: row!important
}

.flex-row {
    flex-direction: row
}

.flex-col {
    flex-direction: column
}

.flex-wrap {
    flex-wrap: wrap
}

.items-start {
    align-items: flex-start
}

.items-center {
    align-items: center
}

.items-baseline {
    align-items: baseline
}

.items-stretch {
    align-items: stretch
}

.justify-start {
    justify-content: flex-start
}

.justify-end {
    justify-content: flex-end
}

.justify-center {
    justify-content: center
}

.justify-between {
    justify-content: space-between
}

.justify-around {
    justify-content: space-around
}

.justify-items-center {
    justify-items: center
}

.gap-1 {
    gap: .25rem
}

.gap-2 {
    gap: .5rem
}

.gap-4 {
    gap: 1rem
}

.gap-5 {
    gap: 1.25rem
}

.gap-6 {
    gap: 1.5rem
}

.gap-8 {
    gap: 2rem
}

.gap-x-3 {
    -moz-column-gap: .75rem;
    column-gap: .75rem
}

.gap-x-4 {
    -moz-column-gap: 1rem;
    column-gap: 1rem
}

.gap-x-8 {
    -moz-column-gap: 2rem;
    column-gap: 2rem
}

.gap-y-20 {
    row-gap: 5rem
}

.gap-y-5 {
    row-gap: 1.25rem
}

.gap-y-7 {
    row-gap: 1.75rem
}

.space-x-0>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(0px * var(--tw-space-x-reverse));
    margin-left: calc(0px * calc(1 - var(--tw-space-x-reverse)))
}

.space-x-0\.5>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(.125rem * var(--tw-space-x-reverse));
    margin-left: calc(.125rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-x-1>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(.25rem * var(--tw-space-x-reverse));
    margin-left: calc(.25rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-x-2>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(.5rem * var(--tw-space-x-reverse));
    margin-left: calc(.5rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-x-3>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(.75rem * var(--tw-space-x-reverse));
    margin-left: calc(.75rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-x-4>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(1rem * var(--tw-space-x-reverse));
    margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-x-5>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(1.25rem * var(--tw-space-x-reverse));
    margin-left: calc(1.25rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-x-6>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(1.5rem * var(--tw-space-x-reverse));
    margin-left: calc(1.5rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-x-8>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(2rem * var(--tw-space-x-reverse));
    margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-y-1>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(.25rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(.25rem * var(--tw-space-y-reverse))
}

.space-y-2>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(.5rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(.5rem * var(--tw-space-y-reverse))
}

.space-y-3>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(.75rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(.75rem * var(--tw-space-y-reverse))
}

.space-y-4>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1rem * var(--tw-space-y-reverse))
}

.space-y-5>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(1.25rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1.25rem * var(--tw-space-y-reverse))
}

.space-y-6>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1.5rem * var(--tw-space-y-reverse))
}

.space-y-8>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(2rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(2rem * var(--tw-space-y-reverse))
}

.divide-x>:not([hidden])~:not([hidden]) {
    --tw-divide-x-reverse: 0;
    border-right-width: calc(1px * var(--tw-divide-x-reverse));
    border-left-width: calc(1px * calc(1 - var(--tw-divide-x-reverse)))
}

.divide-y>:not([hidden])~:not([hidden]) {
    --tw-divide-y-reverse: 0;
    border-top-width: calc(1px * calc(1 - var(--tw-divide-y-reverse)));
    border-bottom-width: calc(1px * var(--tw-divide-y-reverse))
}

.divide-gray-100>:not([hidden])~:not([hidden]) {
    --tw-divide-opacity: 1;
    border-color: rgb(243 244 246 / var(--tw-divide-opacity))
}

.divide-gray-200>:not([hidden])~:not([hidden]) {
    --tw-divide-opacity: 1;
    border-color: rgb(229 231 235 / var(--tw-divide-opacity))
}

.divide-gray-300>:not([hidden])~:not([hidden]) {
    --tw-divide-opacity: 1;
    border-color: rgb(209 213 219 / var(--tw-divide-opacity))
}

.divide-gray-500\/25>:not([hidden])~:not([hidden]) {
    border-color: #6b728040
}

.self-center {
    align-self: center
}

.self-stretch {
    align-self: stretch
}

.overflow-hidden {
    overflow: hidden
}

.overflow-scroll {
    overflow: scroll
}

.overflow-x-auto {
    overflow-x: auto
}

.overflow-y-auto {
    overflow-y: auto
}

.overflow-y-scroll {
    overflow-y: scroll
}

.truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap
}

.whitespace-nowrap {
    white-space: nowrap
}

.break-all {
    word-break: break-all
}

.rounded {
    border-radius: .25rem
}

.rounded-3xl {
    border-radius: 1.5rem
}

.rounded-\[10px\] {
    border-radius: 10px
}

.rounded-full {
    border-radius: 9999px
}

.rounded-lg {
    border-radius: .5rem
}

.rounded-md {
    border-radius: .375rem
}

.rounded-none {
    border-radius: 0
}

.rounded-sm {
    border-radius: .125rem
}

.rounded-b-none {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0
}

.rounded-l-md {
    border-top-left-radius: .375rem;
    border-bottom-left-radius: .375rem
}

.rounded-r-md {
    border-top-right-radius: .375rem;
    border-bottom-right-radius: .375rem
}

.rounded-t-3xl {
    border-top-left-radius: 1.5rem;
    border-top-right-radius: 1.5rem
}

.rounded-t-none {
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.border {
    border-width: 1px
}

.border-0 {
    border-width: 0px
}

.border-2 {
    border-width: 2px
}

.border-b {
    border-bottom-width: 1px
}

.border-b-2 {
    border-bottom-width: 2px
}

.border-l-4 {
    border-left-width: 4px
}

.border-r {
    border-right-width: 1px
}

.border-r-0 {
    border-right-width: 0px
}

.border-t {
    border-top-width: 1px
}

.border-black {
    --tw-border-opacity: 1;
    border-color: rgb(0 0 0 / var(--tw-border-opacity))
}

.border-gray-100 {
    --tw-border-opacity: 1;
    border-color: rgb(243 244 246 / var(--tw-border-opacity))
}

.border-gray-200 {
    --tw-border-opacity: 1;
    border-color: rgb(229 231 235 / var(--tw-border-opacity))
}

.border-gray-300 {
    --tw-border-opacity: 1;
    border-color: rgb(209 213 219 / var(--tw-border-opacity))
}

.border-gray-400 {
    --tw-border-opacity: 1;
    border-color: rgb(156 163 175 / var(--tw-border-opacity))
}

.border-gray-900\/10 {
    border-color: #1118271a
}

.border-indigo-400 {
    --tw-border-opacity: 1;
    border-color: rgb(129 140 248 / var(--tw-border-opacity))
}

.border-transparent {
    border-color: transparent
}

.bg-\[\#FF2D20\]\/10 {
    background-color: #ff2d201a
}

.bg-body {
    --tw-bg-opacity: 1;
    background-color: rgb(255 255 255 / var(--tw-bg-opacity))
}

.bg-gray-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(243 244 246 / var(--tw-bg-opacity))
}

.bg-gray-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(229 231 235 / var(--tw-bg-opacity))
}

.bg-gray-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(249 250 251 / var(--tw-bg-opacity))
}

.bg-gray-500 {
    --tw-bg-opacity: 1;
    background-color: rgb(107 114 128 / var(--tw-bg-opacity))
}

.bg-gray-800 {
    --tw-bg-opacity: 1;
    background-color: rgb(31 41 55 / var(--tw-bg-opacity))
}

.bg-gray-900\/80 {
    background-color: #111827cc
}

.bg-green-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(220 252 231 / var(--tw-bg-opacity))
}

.bg-green-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(22 163 74 / var(--tw-bg-opacity))
}

.bg-green-700 {
    --tw-bg-opacity: 1;
    background-color: rgb(21 128 61 / var(--tw-bg-opacity))
}

.bg-green-800 {
    --tw-bg-opacity: 1;
    background-color: rgb(22 101 52 / var(--tw-bg-opacity))
}

.bg-indigo-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(238 242 255 / var(--tw-bg-opacity))
}

.bg-indigo-500 {
    --tw-bg-opacity: 1;
    background-color: rgb(99 102 241 / var(--tw-bg-opacity))
}

.bg-indigo-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(79 70 229 / var(--tw-bg-opacity))
}

.bg-primary {
    --tw-bg-opacity: 1;
    background-color: rgb(20 175 49 / var(--tw-bg-opacity))
}

.bg-red-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(254 226 226 / var(--tw-bg-opacity))
}

.bg-red-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(220 38 38 / var(--tw-bg-opacity))
}

.bg-red-700 {
    --tw-bg-opacity: 1;
    background-color: rgb(185 28 28 / var(--tw-bg-opacity))
}

.bg-white {
    --tw-bg-opacity: 1;
    background-color: rgb(255 255 255 / var(--tw-bg-opacity))
}

.bg-yellow-700 {
    --tw-bg-opacity: 1;
    background-color: rgb(161 98 7 / var(--tw-bg-opacity))
}

.bg-yellow-800 {
    --tw-bg-opacity: 1;
    background-color: rgb(133 77 14 / var(--tw-bg-opacity))
}

.bg-opacity-25 {
    --tw-bg-opacity: .25
}

.bg-gradient-to-b {
    background-image: linear-gradient(to bottom,var(--tw-gradient-stops))
}

.from-transparent {
    --tw-gradient-from: transparent var(--tw-gradient-from-position);
    --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
}

.via-white {
    --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
    --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
}

.to-white {
    --tw-gradient-to: #fff var(--tw-gradient-to-position)
}

.to-zinc-900 {
    --tw-gradient-to: #18181b var(--tw-gradient-to-position)
}

.bg-cover {
    background-size: cover
}

.bg-center {
    background-position: center
}

.bg-no-repeat {
    background-repeat: no-repeat
}

.fill-black {
    fill: #000
}

.fill-green-500 {
    fill: #22c55e
}

.fill-indigo-500 {
    fill: #6366f1
}

.fill-primary {
    fill: #14af31
}

.stroke-\[\#FF2D20\] {
    stroke: #ff2d20
}

.stroke-gray-400 {
    stroke: #9ca3af
}

.object-contain {
    -o-object-fit: contain;
    object-fit: contain
}

.object-cover {
    -o-object-fit: cover;
    object-fit: cover
}

.object-top {
    -o-object-position: top;
    object-position: top
}

.p-0 {
    padding: 0
}

.p-0\.5 {
    padding: .125rem
}

.p-1 {
    padding: .25rem
}

.p-1\.5 {
    padding: .375rem
}

.p-2 {
    padding: .5rem
}

.p-2\.5 {
    padding: .625rem
}

.p-3 {
    padding: .75rem
}

.p-4 {
    padding: 1rem
}

.p-5 {
    padding: 1.25rem
}

.p-6 {
    padding: 1.5rem
}

.p-8 {
    padding: 2rem
}

.px-1 {
    padding-left: .25rem;
    padding-right: .25rem
}

.px-1\.5 {
    padding-left: .375rem;
    padding-right: .375rem
}

.px-2 {
    padding-left: .5rem;
    padding-right: .5rem
}

.px-2\.5 {
    padding-left: .625rem;
    padding-right: .625rem
}

.px-3 {
    padding-left: .75rem;
    padding-right: .75rem
}

.px-4 {
    padding-left: 1rem;
    padding-right: 1rem
}

.px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem
}

.py-0 {
    padding-top: 0;
    padding-bottom: 0
}

.py-0\.5 {
    padding-top: .125rem;
    padding-bottom: .125rem
}

.py-1 {
    padding-top: .25rem;
    padding-bottom: .25rem
}

.py-1\.5 {
    padding-top: .375rem;
    padding-bottom: .375rem
}

.py-10 {
    padding-top: 2.5rem;
    padding-bottom: 2.5rem
}

.py-12 {
    padding-top: 3rem;
    padding-bottom: 3rem
}

.py-16 {
    padding-top: 4rem;
    padding-bottom: 4rem
}

.py-2 {
    padding-top: .5rem;
    padding-bottom: .5rem
}

.py-2\.5 {
    padding-top: .625rem;
    padding-bottom: .625rem
}

.py-3 {
    padding-top: .75rem;
    padding-bottom: .75rem
}

.py-3\.5 {
    padding-top: .875rem;
    padding-bottom: .875rem
}

.py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem
}

.py-5 {
    padding-top: 1.25rem;
    padding-bottom: 1.25rem
}

.py-6 {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem
}

.py-8 {
    padding-top: 2rem;
    padding-bottom: 2rem
}

.pb-1 {
    padding-bottom: .25rem
}

.pb-3 {
    padding-bottom: .75rem
}

.pb-4 {
    padding-bottom: 1rem
}

.pb-8 {
    padding-bottom: 2rem
}

.pe-4 {
    padding-inline-end:1rem}

.pl-10 {
    padding-left: 2.5rem
}

.pl-8 {
    padding-left: 2rem
}

.pl-9 {
    padding-left: 2.25rem
}

.pr-0 {
    padding-right: 0
}

.ps-3 {
    padding-inline-start:.75rem}

.pt-1 {
    padding-top: .25rem
}

.pt-16 {
    padding-top: 4rem
}

.pt-2 {
    padding-top: .5rem
}

.pt-3 {
    padding-top: .75rem
}

.pt-4 {
    padding-top: 1rem
}

.pt-5 {
    padding-top: 1.25rem
}

.pt-6 {
    padding-top: 1.5rem
}

.pt-8 {
    padding-top: 2rem
}

.text-left {
    text-align: left
}

.text-center {
    text-align: center
}

.text-start {
    text-align: start
}

.text-end {
    text-align: end
}

.align-middle {
    vertical-align: middle
}

.font-mono {
    font-family: ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace
}

.font-sans {
    font-family: Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji"
}

.text-2xl {
    font-size: 1.5rem;
    line-height: 2rem
}

.text-4xl {
    font-size: 2.25rem;
    line-height: 2.5rem
}

.text-base {
    font-size: 1rem;
    line-height: 1.5rem
}

.text-lg {
    font-size: 1.125rem;
    line-height: 1.75rem
}

.text-sm {
    font-size: .875rem;
    line-height: 1.25rem
}

.text-sm\/relaxed {
    font-size: .875rem;
    line-height: 1.625
}

.text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem
}

.text-xs {
    font-size: .75rem;
    line-height: 1rem
}

.font-black {
    font-weight: 900
}

.font-bold {
    font-weight: 700
}

.font-medium {
    font-weight: 500
}

.font-normal {
    font-weight: 400
}

.font-semibold {
    font-weight: 600
}

.uppercase {
    text-transform: uppercase
}

.leading-4 {
    line-height: 1rem
}

.leading-5 {
    line-height: 1.25rem
}

.leading-6 {
    line-height: 1.5rem
}

.leading-7 {
    line-height: 1.75rem
}

.leading-8 {
    line-height: 2rem
}

.leading-relaxed {
    line-height: 1.625
}

.leading-tight {
    line-height: 1.25
}

.tracking-tight {
    letter-spacing: -.025em
}

.tracking-wider {
    letter-spacing: .05em
}

.tracking-widest {
    letter-spacing: .1em
}

.text-black {
    --tw-text-opacity: 1;
    color: rgb(0 0 0 / var(--tw-text-opacity))
}

.text-black\/50 {
    color: #00000080
}

.text-blue-600 {
    --tw-text-opacity: 1;
    color: rgb(37 99 235 / var(--tw-text-opacity))
}

.text-font_primary {
    --tw-text-opacity: 1;
    color: rgb(46 46 46 / var(--tw-text-opacity))
}

.text-font_secondary {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity))
}

.text-gray-200 {
    --tw-text-opacity: 1;
    color: rgb(229 231 235 / var(--tw-text-opacity))
}

.text-gray-300 {
    --tw-text-opacity: 1;
    color: rgb(209 213 219 / var(--tw-text-opacity))
}

.text-gray-400 {
    --tw-text-opacity: 1;
    color: rgb(156 163 175 / var(--tw-text-opacity))
}

.text-gray-500 {
    --tw-text-opacity: 1;
    color: rgb(107 114 128 / var(--tw-text-opacity))
}

.text-gray-600 {
    --tw-text-opacity: 1;
    color: rgb(75 85 99 / var(--tw-text-opacity))
}

.text-gray-700 {
    --tw-text-opacity: 1;
    color: rgb(55 65 81 / var(--tw-text-opacity))
}

.text-gray-800 {
    --tw-text-opacity: 1;
    color: rgb(31 41 55 / var(--tw-text-opacity))
}

.text-gray-900 {
    --tw-text-opacity: 1;
    color: rgb(17 24 39 / var(--tw-text-opacity))
}

.text-green-400 {
    --tw-text-opacity: 1;
    color: rgb(74 222 128 / var(--tw-text-opacity))
}

.text-green-500 {
    --tw-text-opacity: 1;
    color: rgb(34 197 94 / var(--tw-text-opacity))
}

.text-green-600 {
    --tw-text-opacity: 1;
    color: rgb(22 163 74 / var(--tw-text-opacity))
}

.text-green-800 {
    --tw-text-opacity: 1;
    color: rgb(22 101 52 / var(--tw-text-opacity))
}

.text-indigo-600 {
    --tw-text-opacity: 1;
    color: rgb(79 70 229 / var(--tw-text-opacity))
}

.text-indigo-700 {
    --tw-text-opacity: 1;
    color: rgb(67 56 202 / var(--tw-text-opacity))
}

.text-primary {
    --tw-text-opacity: 1;
    color: rgb(20 175 49 / var(--tw-text-opacity))
}

.text-red-500 {
    --tw-text-opacity: 1;
    color: rgb(239 68 68 / var(--tw-text-opacity))
}

.text-red-600 {
    --tw-text-opacity: 1;
    color: rgb(220 38 38 / var(--tw-text-opacity))
}

.text-red-800 {
    --tw-text-opacity: 1;
    color: rgb(153 27 27 / var(--tw-text-opacity))
}

.text-white {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity))
}

.underline {
    text-decoration-line: underline
}

.no-underline {
    text-decoration-line: none
}

.antialiased {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

.opacity-0 {
    opacity: 0
}

.opacity-100 {
    opacity: 1
}

.opacity-40 {
    opacity: .4
}

.opacity-50 {
    opacity: .5
}

.opacity-75 {
    opacity: .75
}

.shadow {
    --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
    --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)
}

.shadow-\[0px_14px_34px_0px_rgba\(0\,0\,0\,0\.08\)\] {
    --tw-shadow: 0px 14px 34px 0px rgba(0,0,0,.08);
    --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)
}

.shadow-lg {
    --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / .1), 0 4px 6px -4px rgb(0 0 0 / .1);
    --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)
}

.shadow-md {
    --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / .1), 0 2px 4px -2px rgb(0 0 0 / .1);
    --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)
}

.shadow-sm {
    --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);
    --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)
}

.shadow-xl {
    --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / .1), 0 8px 10px -6px rgb(0 0 0 / .1);
    --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)
}

.ring-1 {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)
}

.ring-8 {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(8px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)
}

.ring-inset {
    --tw-ring-inset: inset
}

.ring-black {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity))
}

.ring-gray-300 {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity))
}

.ring-gray-900\/10 {
    --tw-ring-color: rgb(17 24 39 / .1)
}

.ring-green-600\/20 {
    --tw-ring-color: rgb(22 163 74 / .2)
}

.ring-red-600\/20 {
    --tw-ring-color: rgb(220 38 38 / .2)
}

.ring-transparent {
    --tw-ring-color: transparent
}

.ring-white {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))
}

.ring-white\/\[0\.05\] {
    --tw-ring-color: rgb(255 255 255 / .05)
}

.ring-yellow-600\/20 {
    --tw-ring-color: rgb(202 138 4 / .2)
}

.ring-opacity-5 {
    --tw-ring-opacity: .05
}

.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.06\)\] {
    --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.06));
    filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
}

.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.25\)\] {
    --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.25));
    filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
}

.filter {
    filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
}

.transition {
    transition-property: color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;
    transition-property: color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;
    transition-property: color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;
    transition-timing-function: cubic-bezier(.4,0,.2,1);
    transition-duration: .15s
}

.transition-all {
    transition-property: all;
    transition-timing-function: cubic-bezier(.4,0,.2,1);
    transition-duration: .15s
}

.duration-150 {
    transition-duration: .15s
}

.duration-200 {
    transition-duration: .2s
}

.duration-300 {
    transition-duration: .3s
}

.duration-75 {
    transition-duration: 75ms
}

.ease-in {
    transition-timing-function: cubic-bezier(.4,0,1,1)
}

.ease-in-out {
    transition-timing-function: cubic-bezier(.4,0,.2,1)
}

.ease-out {
    transition-timing-function: cubic-bezier(0,0,.2,1)
}

[x-cloak] {
    display: none
}

@media (prefers-color-scheme: dark) {
    .dark\:prose-invert {
        --tw-prose-body: var(--tw-prose-invert-body);
        --tw-prose-headings: var(--tw-prose-invert-headings);
        --tw-prose-lead: var(--tw-prose-invert-lead);
        --tw-prose-links: var(--tw-prose-invert-links);
        --tw-prose-bold: var(--tw-prose-invert-bold);
        --tw-prose-counters: var(--tw-prose-invert-counters);
        --tw-prose-bullets: var(--tw-prose-invert-bullets);
        --tw-prose-hr: var(--tw-prose-invert-hr);
        --tw-prose-quotes: var(--tw-prose-invert-quotes);
        --tw-prose-quote-borders: var(--tw-prose-invert-quote-borders);
        --tw-prose-captions: var(--tw-prose-invert-captions);
        --tw-prose-kbd: var(--tw-prose-invert-kbd);
        --tw-prose-kbd-shadows: var(--tw-prose-invert-kbd-shadows);
        --tw-prose-code: var(--tw-prose-invert-code);
        --tw-prose-pre-code: var(--tw-prose-invert-pre-code);
        --tw-prose-pre-bg: var(--tw-prose-invert-pre-bg);
        --tw-prose-th-borders: var(--tw-prose-invert-th-borders);
        --tw-prose-td-borders: var(--tw-prose-invert-td-borders)
    }
}

.selection\:bg-\[\#FF2D20\] *::-moz-selection {
    --tw-bg-opacity: 1;
    background-color: rgb(255 45 32 / var(--tw-bg-opacity))
}

.selection\:bg-\[\#FF2D20\] *::selection {
    --tw-bg-opacity: 1;
    background-color: rgb(255 45 32 / var(--tw-bg-opacity))
}

.selection\:text-white *::-moz-selection {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity))
}

.selection\:text-white *::selection {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity))
}

.selection\:bg-\[\#FF2D20\]::-moz-selection {
    --tw-bg-opacity: 1;
    background-color: rgb(255 45 32 / var(--tw-bg-opacity))
}

.selection\:bg-\[\#FF2D20\]::selection {
    --tw-bg-opacity: 1;
    background-color: rgb(255 45 32 / var(--tw-bg-opacity))
}

.selection\:text-white::-moz-selection {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity))
}

.selection\:text-white::selection {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity))
}

.placeholder\:text-font_primary::-moz-placeholder {
    --tw-text-opacity: 1;
    color: rgb(46 46 46 / var(--tw-text-opacity))
}

.placeholder\:text-font_primary::placeholder {
    --tw-text-opacity: 1;
    color: rgb(46 46 46 / var(--tw-text-opacity))
}

.placeholder\:text-gray-400::-moz-placeholder {
    --tw-text-opacity: 1;
    color: rgb(156 163 175 / var(--tw-text-opacity))
}

.placeholder\:text-gray-400::placeholder {
    --tw-text-opacity: 1;
    color: rgb(156 163 175 / var(--tw-text-opacity))
}

.hover\:border-gray-300:hover {
    --tw-border-opacity: 1;
    border-color: rgb(209 213 219 / var(--tw-border-opacity))
}

.hover\:bg-gray-100:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(243 244 246 / var(--tw-bg-opacity))
}

.hover\:bg-gray-50:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(249 250 251 / var(--tw-bg-opacity))
}

.hover\:bg-gray-700:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(55 65 81 / var(--tw-bg-opacity))
}

.hover\:bg-indigo-600:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(79 70 229 / var(--tw-bg-opacity))
}

.hover\:bg-red-500:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(239 68 68 / var(--tw-bg-opacity))
}

.hover\:bg-red-600:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(220 38 38 / var(--tw-bg-opacity))
}

.hover\:text-black:hover {
    --tw-text-opacity: 1;
    color: rgb(0 0 0 / var(--tw-text-opacity))
}

.hover\:text-black\/70:hover {
    color: #000000b3
}

.hover\:text-font_primary:hover {
    --tw-text-opacity: 1;
    color: rgb(46 46 46 / var(--tw-text-opacity))
}

.hover\:text-gray-400:hover {
    --tw-text-opacity: 1;
    color: rgb(156 163 175 / var(--tw-text-opacity))
}

.hover\:text-gray-500:hover {
    --tw-text-opacity: 1;
    color: rgb(107 114 128 / var(--tw-text-opacity))
}

.hover\:text-gray-700:hover {
    --tw-text-opacity: 1;
    color: rgb(55 65 81 / var(--tw-text-opacity))
}

.hover\:text-gray-800:hover {
    --tw-text-opacity: 1;
    color: rgb(31 41 55 / var(--tw-text-opacity))
}

.hover\:text-gray-900:hover {
    --tw-text-opacity: 1;
    color: rgb(17 24 39 / var(--tw-text-opacity))
}

.hover\:ring-black\/20:hover {
    --tw-ring-color: rgb(0 0 0 / .2)
}

.focus\:z-10:focus {
    z-index: 10
}

.focus\:border-none:focus {
    border-style: none
}

.focus\:border-blue-300:focus {
    --tw-border-opacity: 1;
    border-color: rgb(147 197 253 / var(--tw-border-opacity))
}

.focus\:border-gray-300:focus {
    --tw-border-opacity: 1;
    border-color: rgb(209 213 219 / var(--tw-border-opacity))
}

.focus\:border-indigo-500:focus {
    --tw-border-opacity: 1;
    border-color: rgb(99 102 241 / var(--tw-border-opacity))
}

.focus\:border-indigo-700:focus {
    --tw-border-opacity: 1;
    border-color: rgb(67 56 202 / var(--tw-border-opacity))
}

.focus\:bg-gray-100:focus {
    --tw-bg-opacity: 1;
    background-color: rgb(243 244 246 / var(--tw-bg-opacity))
}

.focus\:bg-gray-50:focus {
    --tw-bg-opacity: 1;
    background-color: rgb(249 250 251 / var(--tw-bg-opacity))
}

.focus\:bg-gray-700:focus {
    --tw-bg-opacity: 1;
    background-color: rgb(55 65 81 / var(--tw-bg-opacity))
}

.focus\:bg-indigo-100:focus {
    --tw-bg-opacity: 1;
    background-color: rgb(224 231 255 / var(--tw-bg-opacity))
}

.focus\:bg-indigo-600:focus {
    --tw-bg-opacity: 1;
    background-color: rgb(79 70 229 / var(--tw-bg-opacity))
}

.focus\:bg-red-600:focus {
    --tw-bg-opacity: 1;
    background-color: rgb(220 38 38 / var(--tw-bg-opacity))
}

.focus\:text-font_primary:focus {
    --tw-text-opacity: 1;
    color: rgb(46 46 46 / var(--tw-text-opacity))
}

.focus\:text-gray-500:focus {
    --tw-text-opacity: 1;
    color: rgb(107 114 128 / var(--tw-text-opacity))
}

.focus\:text-gray-700:focus {
    --tw-text-opacity: 1;
    color: rgb(55 65 81 / var(--tw-text-opacity))
}

.focus\:text-gray-800:focus {
    --tw-text-opacity: 1;
    color: rgb(31 41 55 / var(--tw-text-opacity))
}

.focus\:text-indigo-800:focus {
    --tw-text-opacity: 1;
    color: rgb(55 48 163 / var(--tw-text-opacity))
}

.focus\:outline-none:focus {
    outline: 2px solid transparent;
    outline-offset: 2px
}

.focus\:ring:focus {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)
}

.focus\:ring-0:focus {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)
}

.focus\:ring-2:focus {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)
}

.focus\:ring-inset:focus {
    --tw-ring-inset: inset
}

.focus\:ring-indigo-500:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(99 102 241 / var(--tw-ring-opacity))
}

.focus\:ring-primary:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(20 175 49 / var(--tw-ring-opacity))
}

.focus\:ring-red-500:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity))
}

.focus\:ring-offset-2:focus {
    --tw-ring-offset-width: 2px
}

.focus-visible\:outline:focus-visible {
    outline-style: solid
}

.focus-visible\:outline-2:focus-visible {
    outline-width: 2px
}

.focus-visible\:outline-offset-2:focus-visible {
    outline-offset: 2px
}

.focus-visible\:outline-red-600:focus-visible {
    outline-color: #dc2626
}

.focus-visible\:ring-1:focus-visible {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)
}

.focus-visible\:ring-\[\#FF2D20\]:focus-visible {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
}

.active\:bg-gray-100:active {
    --tw-bg-opacity: 1;
    background-color: rgb(243 244 246 / var(--tw-bg-opacity))
}

.active\:bg-gray-50:active {
    --tw-bg-opacity: 1;
    background-color: rgb(249 250 251 / var(--tw-bg-opacity))
}

.active\:bg-gray-900:active {
    --tw-bg-opacity: 1;
    background-color: rgb(17 24 39 / var(--tw-bg-opacity))
}

.active\:bg-red-700:active {
    --tw-bg-opacity: 1;
    background-color: rgb(185 28 28 / var(--tw-bg-opacity))
}

.active\:text-gray-500:active {
    --tw-text-opacity: 1;
    color: rgb(107 114 128 / var(--tw-text-opacity))
}

.active\:text-gray-700:active {
    --tw-text-opacity: 1;
    color: rgb(55 65 81 / var(--tw-text-opacity))
}

.disabled\:opacity-25:disabled {
    opacity: .25
}

@media (min-width: 640px) {
    .sm\:col-span-4 {
        grid-column:span 4 / span 4
    }

    .sm\:-mx-6 {
        margin-left: -1.5rem;
        margin-right: -1.5rem
    }

    .sm\:-my-px {
        margin-top: -1px;
        margin-bottom: -1px
    }

    .sm\:mx-0 {
        margin-left: 0;
        margin-right: 0
    }

    .sm\:mx-auto {
        margin-left: auto;
        margin-right: auto
    }

    .sm\:-me-2 {
        margin-inline-end:-.5rem}

    .sm\:ms-10 {
        margin-inline-start:2.5rem}

    .sm\:ms-3 {
        margin-inline-start:.75rem}

    .sm\:ms-4 {
        margin-inline-start:1rem}

    .sm\:ms-6 {
        margin-inline-start:1.5rem}

    .sm\:mt-0 {
        margin-top: 0
    }

    .sm\:mt-20 {
        margin-top: 5rem
    }

    .sm\:mt-24 {
        margin-top: 6rem
    }

    .sm\:block {
        display: block
    }

    .sm\:flex {
        display: flex
    }

    .sm\:hidden {
        display: none
    }

    .sm\:size-16 {
        width: 4rem;
        height: 4rem
    }

    .sm\:size-6 {
        width: 1.5rem;
        height: 1.5rem
    }

    .sm\:h-10 {
        height: 2.5rem
    }

    .sm\:w-10 {
        width: 2.5rem
    }

    .sm\:w-full {
        width: 100%
    }

    .sm\:max-w-2xl {
        max-width: 42rem
    }

    .sm\:max-w-lg {
        max-width: 32rem
    }

    .sm\:max-w-md {
        max-width: 28rem
    }

    .sm\:max-w-sm {
        max-width: 24rem
    }

    .sm\:max-w-xl {
        max-width: 36rem
    }

    .sm\:flex-1 {
        flex: 1 1 0%
    }

    .sm\:translate-y-0 {
        --tw-translate-y: 0px;
        transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .sm\:scale-100 {
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .sm\:scale-95 {
        --tw-scale-x: .95;
        --tw-scale-y: .95;
        transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .sm\:grid-cols-2 {
        grid-template-columns: repeat(2,minmax(0,1fr))
    }

    .sm\:flex-row {
        flex-direction: row
    }

    .sm\:items-start {
        align-items: flex-start
    }

    .sm\:items-center {
        align-items: center
    }

    .sm\:justify-start {
        justify-content: flex-start
    }

    .sm\:justify-center {
        justify-content: center
    }

    .sm\:justify-between {
        justify-content: space-between
    }

    .sm\:gap-x-6 {
        -moz-column-gap: 1.5rem;
        column-gap: 1.5rem
    }

    .sm\:space-x-3>:not([hidden])~:not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(.75rem * var(--tw-space-x-reverse));
        margin-left: calc(.75rem * calc(1 - var(--tw-space-x-reverse)))
    }

    .sm\:space-y-0>:not([hidden])~:not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(0px * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(0px * var(--tw-space-y-reverse))
    }

    .sm\:rounded-lg {
        border-radius: .5rem
    }

    .sm\:rounded-md {
        border-radius: .375rem
    }

    .sm\:rounded-bl-md {
        border-bottom-left-radius: .375rem
    }

    .sm\:rounded-br-md {
        border-bottom-right-radius: .375rem
    }

    .sm\:rounded-tl-md {
        border-top-left-radius: .375rem
    }

    .sm\:rounded-tr-md {
        border-top-right-radius: .375rem
    }

    .sm\:p-6 {
        padding: 1.5rem
    }

    .sm\:px-0 {
        padding-left: 0;
        padding-right: 0
    }

    .sm\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    .sm\:pb-4 {
        padding-bottom: 1rem
    }

    .sm\:pt-0 {
        padding-top: 0
    }

    .sm\:pt-24 {
        padding-top: 6rem
    }

    .sm\:pt-5 {
        padding-top: 1.25rem
    }

    .sm\:text-start {
        text-align: start
    }

    .sm\:text-6xl {
        font-size: 3.75rem;
        line-height: 1
    }

    .sm\:text-sm {
        font-size: .875rem;
        line-height: 1.25rem
    }

    .sm\:leading-6 {
        line-height: 1.5rem
    }

    .sm\:ring-1 {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)
    }

    .sm\:ring-white\/10 {
        --tw-ring-color: rgb(255 255 255 / .1)
    }
}

@media (min-width: 768px) {
    .md\:col-span-1 {
        grid-column:span 1 / span 1
    }

    .md\:col-span-2 {
        grid-column: span 2 / span 2
    }

    .md\:row-span-3 {
        grid-row: span 3 / span 3
    }

    .md\:mt-0 {
        margin-top: 0
    }

    .md\:mt-2 {
        margin-top: .5rem
    }

    .md\:block {
        display: block
    }

    .md\:grid {
        display: grid
    }

    .md\:max-w-2xl {
        max-width: 42rem
    }

    .md\:max-w-md {
        max-width: 28rem
    }

    .md\:grid-cols-2 {
        grid-template-columns: repeat(2,minmax(0,1fr))
    }

    .md\:grid-cols-3 {
        grid-template-columns: repeat(3,minmax(0,1fr))
    }

    .md\:grid-cols-4 {
        grid-template-columns: repeat(4,minmax(0,1fr))
    }

    .md\:flex-row {
        flex-direction: row
    }

    .md\:items-center {
        align-items: center
    }

    .md\:gap-6 {
        gap: 1.5rem
    }

    .md\:gap-8 {
        gap: 2rem
    }

    .md\:space-x-2>:not([hidden])~:not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(.5rem * var(--tw-space-x-reverse));
        margin-left: calc(.5rem * calc(1 - var(--tw-space-x-reverse)))
    }

    .md\:space-y-0>:not([hidden])~:not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(0px * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(0px * var(--tw-space-y-reverse))
    }

    .md\:divide-x>:not([hidden])~:not([hidden]) {
        --tw-divide-x-reverse: 0;
        border-right-width: calc(1px * var(--tw-divide-x-reverse));
        border-left-width: calc(1px * calc(1 - var(--tw-divide-x-reverse)))
    }

    .md\:divide-y-0>:not([hidden])~:not([hidden]) {
        --tw-divide-y-reverse: 0;
        border-top-width: calc(0px * calc(1 - var(--tw-divide-y-reverse)));
        border-bottom-width: calc(0px * var(--tw-divide-y-reverse))
    }

    .md\:text-4xl {
        font-size: 2.25rem;
        line-height: 2.5rem
    }
}

@media (min-width: 1024px) {
    .lg\:fixed {
        position:fixed
    }

    .lg\:inset-y-0 {
        top: 0;
        bottom: 0
    }

    .lg\:z-50 {
        z-index: 50
    }

    .lg\:col-span-4 {
        grid-column: span 4 / span 4
    }

    .lg\:col-start-2 {
        grid-column-start: 2
    }

    .lg\:-mx-8 {
        margin-left: -2rem;
        margin-right: -2rem
    }

    .lg\:mx-0 {
        margin-left: 0;
        margin-right: 0
    }

    .lg\:mt-0 {
        margin-top: 0
    }

    .lg\:mt-24 {
        margin-top: 6rem
    }

    .lg\:block {
        display: block
    }

    .lg\:flex {
        display: flex
    }

    .lg\:hidden {
        display: none
    }

    .lg\:aspect-\[3\/3\] {
        aspect-ratio: 3/3
    }

    .lg\:h-16 {
        height: 4rem
    }

    .lg\:h-6 {
        height: 1.5rem
    }

    .lg\:w-72 {
        width: 18rem
    }

    .lg\:w-px {
        width: 1px
    }

    .lg\:max-w-7xl {
        max-width: 80rem
    }

    .lg\:max-w-none {
        max-width: none
    }

    .lg\:flex-1 {
        flex: 1 1 0%
    }

    .lg\:flex-shrink-0 {
        flex-shrink: 0
    }

    .lg\:flex-grow {
        flex-grow: 1
    }

    .lg\:grid-cols-2 {
        grid-template-columns: repeat(2,minmax(0,1fr))
    }

    .lg\:grid-cols-3 {
        grid-template-columns: repeat(3,minmax(0,1fr))
    }

    .lg\:grid-cols-4 {
        grid-template-columns: repeat(4,minmax(0,1fr))
    }

    .lg\:grid-cols-6 {
        grid-template-columns: repeat(6,minmax(0,1fr))
    }

    .lg\:flex-col {
        flex-direction: column
    }

    .lg\:items-end {
        align-items: flex-end
    }

    .lg\:items-center {
        align-items: center
    }

    .lg\:justify-end {
        justify-content: flex-end
    }

    .lg\:justify-center {
        justify-content: center
    }

    .lg\:gap-8 {
        gap: 2rem
    }

    .lg\:gap-x-10 {
        -moz-column-gap: 2.5rem;
        column-gap: 2.5rem
    }

    .lg\:gap-x-12 {
        -moz-column-gap: 3rem;
        column-gap: 3rem
    }

    .lg\:gap-x-6 {
        -moz-column-gap: 1.5rem;
        column-gap: 1.5rem
    }

    .lg\:bg-gray-200 {
        --tw-bg-opacity: 1;
        background-color: rgb(229 231 235 / var(--tw-bg-opacity))
    }

    .lg\:p-10 {
        padding: 2.5rem
    }

    .lg\:p-8 {
        padding: 2rem
    }

    .lg\:px-8 {
        padding-left: 2rem;
        padding-right: 2rem
    }

    .lg\:pb-10 {
        padding-bottom: 2.5rem
    }

    .lg\:pl-72 {
        padding-left: 18rem
    }

    .lg\:pt-0 {
        padding-top: 0
    }

    .lg\:pt-32 {
        padding-top: 8rem
    }

    .lg\:text-\[\#FF2D20\] {
        --tw-text-opacity: 1;
        color: rgb(255 45 32 / var(--tw-text-opacity))
    }
}

@media (min-width: 1280px) {
    .xl\:fixed {
        position:fixed
    }

    .xl\:z-10 {
        z-index: 10
    }

    .xl\:col-span-2 {
        grid-column: span 2 / span 2
    }

    .xl\:col-span-3 {
        grid-column: span 3 / span 3
    }

    .xl\:col-span-9 {
        grid-column: span 9 / span 9
    }

    .xl\:mx-auto {
        margin-left: auto;
        margin-right: auto
    }

    .xl\:mt-0 {
        margin-top: 0
    }

    .xl\:mt-10 {
        margin-top: 2.5rem
    }

    .xl\:mt-20 {
        margin-top: 5rem
    }

    .xl\:mt-60 {
        margin-top: 15rem
    }

    .xl\:block {
        display: block
    }

    .xl\:grid {
        display: grid
    }

    .xl\:w-1\/4 {
        width: 25%
    }

    .xl\:w-1\/6 {
        width: 16.666667%
    }

    .xl\:max-w-7xl {
        max-width: 80rem
    }

    .xl\:max-w-\[600px\] {
        max-width: 600px
    }

    .xl\:max-w-lg {
        max-width: 32rem
    }

    .xl\:max-w-xl {
        max-width: 36rem
    }

    .xl\:grid-cols-3 {
        grid-template-columns: repeat(3,minmax(0,1fr))
    }

    .xl\:flex-row {
        flex-direction: row
    }

    .xl\:gap-8 {
        gap: 2rem
    }

    .xl\:p-3 {
        padding: .75rem
    }

    .xl\:text-5xl {
        font-size: 3rem;
        line-height: 1
    }

    .xl\:text-8xl {
        font-size: 6rem;
        line-height: 1
    }

    .xl\:text-lg {
        font-size: 1.125rem;
        line-height: 1.75rem
    }

    .xl\:text-sm {
        font-size: .875rem;
        line-height: 1.25rem
    }
}

.ltr\:origin-top-left:where([dir=ltr],[dir=ltr] *) {
    transform-origin: top left
}

.ltr\:origin-top-right:where([dir=ltr],[dir=ltr] *) {
    transform-origin: top right
}

.rtl\:origin-top-left:where([dir=rtl],[dir=rtl] *) {
    transform-origin: top left
}

.rtl\:origin-top-right:where([dir=rtl],[dir=rtl] *) {
    transform-origin: top right
}

.rtl\:flex-row-reverse:where([dir=rtl],[dir=rtl] *) {
    flex-direction: row-reverse
}

@media (prefers-color-scheme: dark) {
    .dark\:block {
        display:block
    }

    .dark\:hidden {
        display: none
    }

    .dark\:border-gray-500 {
        --tw-border-opacity: 1;
        border-color: rgb(107 114 128 / var(--tw-border-opacity))
    }

    .dark\:border-gray-600 {
        --tw-border-opacity: 1;
        border-color: rgb(75 85 99 / var(--tw-border-opacity))
    }

    .dark\:border-gray-700 {
        --tw-border-opacity: 1;
        border-color: rgb(55 65 81 / var(--tw-border-opacity))
    }

    .dark\:border-indigo-600 {
        --tw-border-opacity: 1;
        border-color: rgb(79 70 229 / var(--tw-border-opacity))
    }

    .dark\:bg-black {
        --tw-bg-opacity: 1;
        background-color: rgb(0 0 0 / var(--tw-bg-opacity))
    }

    .dark\:bg-gray-200 {
        --tw-bg-opacity: 1;
        background-color: rgb(229 231 235 / var(--tw-bg-opacity))
    }

    .dark\:bg-gray-700 {
        --tw-bg-opacity: 1;
        background-color: rgb(55 65 81 / var(--tw-bg-opacity))
    }

    .dark\:bg-gray-800 {
        --tw-bg-opacity: 1;
        background-color: rgb(31 41 55 / var(--tw-bg-opacity))
    }

    .dark\:bg-gray-900 {
        --tw-bg-opacity: 1;
        background-color: rgb(17 24 39 / var(--tw-bg-opacity))
    }

    .dark\:bg-indigo-900\/50 {
        background-color: #312e8180
    }

    .dark\:bg-zinc-900 {
        --tw-bg-opacity: 1;
        background-color: rgb(24 24 27 / var(--tw-bg-opacity))
    }

    .dark\:bg-gradient-to-bl {
        background-image: linear-gradient(to bottom left,var(--tw-gradient-stops))
    }

    .dark\:from-gray-700\/50 {
        --tw-gradient-from: rgb(55 65 81 / .5) var(--tw-gradient-from-position);
        --tw-gradient-to: rgb(55 65 81 / 0) var(--tw-gradient-to-position);
        --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
    }

    .dark\:via-transparent {
        --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
        --tw-gradient-stops: var(--tw-gradient-from), transparent var(--tw-gradient-via-position), var(--tw-gradient-to)
    }

    .dark\:via-zinc-900 {
        --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
        --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
    }

    .dark\:to-zinc-900 {
        --tw-gradient-to: #18181b var(--tw-gradient-to-position)
    }

    .dark\:fill-indigo-200 {
        fill: #c7d2fe
    }

    .dark\:fill-white {
        fill: #fff
    }

    .dark\:text-gray-100 {
        --tw-text-opacity: 1;
        color: rgb(243 244 246 / var(--tw-text-opacity))
    }

    .dark\:text-gray-200 {
        --tw-text-opacity: 1;
        color: rgb(229 231 235 / var(--tw-text-opacity))
    }

    .dark\:text-gray-300 {
        --tw-text-opacity: 1;
        color: rgb(209 213 219 / var(--tw-text-opacity))
    }

    .dark\:text-gray-400 {
        --tw-text-opacity: 1;
        color: rgb(156 163 175 / var(--tw-text-opacity))
    }

    .dark\:text-gray-500 {
        --tw-text-opacity: 1;
        color: rgb(107 114 128 / var(--tw-text-opacity))
    }

    .dark\:text-gray-600 {
        --tw-text-opacity: 1;
        color: rgb(75 85 99 / var(--tw-text-opacity))
    }

    .dark\:text-gray-800 {
        --tw-text-opacity: 1;
        color: rgb(31 41 55 / var(--tw-text-opacity))
    }

    .dark\:text-green-400 {
        --tw-text-opacity: 1;
        color: rgb(74 222 128 / var(--tw-text-opacity))
    }

    .dark\:text-indigo-300 {
        --tw-text-opacity: 1;
        color: rgb(165 180 252 / var(--tw-text-opacity))
    }

    .dark\:text-red-400 {
        --tw-text-opacity: 1;
        color: rgb(248 113 113 / var(--tw-text-opacity))
    }

    .dark\:text-white {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity))
    }

    .dark\:text-white\/50 {
        color: #ffffff80
    }

    .dark\:text-white\/70 {
        color: #ffffffb3
    }

    .dark\:ring-zinc-800 {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity))
    }

    .dark\:hover\:border-gray-600:hover {
        --tw-border-opacity: 1;
        border-color: rgb(75 85 99 / var(--tw-border-opacity))
    }

    .dark\:hover\:border-gray-700:hover {
        --tw-border-opacity: 1;
        border-color: rgb(55 65 81 / var(--tw-border-opacity))
    }

    .dark\:hover\:bg-gray-700:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(55 65 81 / var(--tw-bg-opacity))
    }

    .dark\:hover\:bg-gray-800:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(31 41 55 / var(--tw-bg-opacity))
    }

    .dark\:hover\:bg-gray-900:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(17 24 39 / var(--tw-bg-opacity))
    }

    .dark\:hover\:bg-white:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity))
    }

    .dark\:hover\:text-gray-100:hover {
        --tw-text-opacity: 1;
        color: rgb(243 244 246 / var(--tw-text-opacity))
    }

    .dark\:hover\:text-gray-200:hover {
        --tw-text-opacity: 1;
        color: rgb(229 231 235 / var(--tw-text-opacity))
    }

    .dark\:hover\:text-gray-300:hover {
        --tw-text-opacity: 1;
        color: rgb(209 213 219 / var(--tw-text-opacity))
    }

    .dark\:hover\:text-gray-400:hover {
        --tw-text-opacity: 1;
        color: rgb(156 163 175 / var(--tw-text-opacity))
    }

    .dark\:hover\:text-white:hover {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity))
    }

    .dark\:hover\:text-white\/70:hover {
        color: #ffffffb3
    }

    .dark\:hover\:text-white\/80:hover {
        color: #fffc
    }

    .dark\:hover\:ring-zinc-700:hover {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity))
    }

    .dark\:focus\:border-blue-700:focus {
        --tw-border-opacity: 1;
        border-color: rgb(29 78 216 / var(--tw-border-opacity))
    }

    .dark\:focus\:border-blue-800:focus {
        --tw-border-opacity: 1;
        border-color: rgb(30 64 175 / var(--tw-border-opacity))
    }

    .dark\:focus\:border-gray-600:focus {
        --tw-border-opacity: 1;
        border-color: rgb(75 85 99 / var(--tw-border-opacity))
    }

    .dark\:focus\:border-gray-700:focus {
        --tw-border-opacity: 1;
        border-color: rgb(55 65 81 / var(--tw-border-opacity))
    }

    .dark\:focus\:border-indigo-300:focus {
        --tw-border-opacity: 1;
        border-color: rgb(165 180 252 / var(--tw-border-opacity))
    }

    .dark\:focus\:border-indigo-600:focus {
        --tw-border-opacity: 1;
        border-color: rgb(79 70 229 / var(--tw-border-opacity))
    }

    .dark\:focus\:bg-gray-700:focus {
        --tw-bg-opacity: 1;
        background-color: rgb(55 65 81 / var(--tw-bg-opacity))
    }

    .dark\:focus\:bg-gray-800:focus {
        --tw-bg-opacity: 1;
        background-color: rgb(31 41 55 / var(--tw-bg-opacity))
    }

    .dark\:focus\:bg-gray-900:focus {
        --tw-bg-opacity: 1;
        background-color: rgb(17 24 39 / var(--tw-bg-opacity))
    }

    .dark\:focus\:bg-indigo-900:focus {
        --tw-bg-opacity: 1;
        background-color: rgb(49 46 129 / var(--tw-bg-opacity))
    }

    .dark\:focus\:bg-white:focus {
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity))
    }

    .dark\:focus\:text-gray-200:focus {
        --tw-text-opacity: 1;
        color: rgb(229 231 235 / var(--tw-text-opacity))
    }

    .dark\:focus\:text-gray-300:focus {
        --tw-text-opacity: 1;
        color: rgb(209 213 219 / var(--tw-text-opacity))
    }

    .dark\:focus\:text-gray-400:focus {
        --tw-text-opacity: 1;
        color: rgb(156 163 175 / var(--tw-text-opacity))
    }

    .dark\:focus\:text-indigo-200:focus {
        --tw-text-opacity: 1;
        color: rgb(199 210 254 / var(--tw-text-opacity))
    }

    .dark\:focus\:ring-indigo-600:focus {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(79 70 229 / var(--tw-ring-opacity))
    }

    .dark\:focus\:ring-offset-gray-800:focus {
        --tw-ring-offset-color: #1f2937
    }

    .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
    }

    .dark\:focus-visible\:ring-white:focus-visible {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))
    }

    .dark\:active\:bg-gray-300:active {
        --tw-bg-opacity: 1;
        background-color: rgb(209 213 219 / var(--tw-bg-opacity))
    }

    .dark\:active\:bg-gray-700:active {
        --tw-bg-opacity: 1;
        background-color: rgb(55 65 81 / var(--tw-bg-opacity))
    }

    .dark\:active\:text-gray-300:active {
        --tw-text-opacity: 1;
        color: rgb(209 213 219 / var(--tw-text-opacity))
    }
}

</style>