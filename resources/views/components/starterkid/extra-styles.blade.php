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


</style>

