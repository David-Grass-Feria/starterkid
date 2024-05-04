<style>
 


 .prose h2.anchored::before {
    content: "";
    display: block;
    height: 150px; /* Höhe der Navbar anpassen */
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
  border: 1.5px solid black;
}

.prose hr {
  border: 1px solid gray;
}

.prose :where(figcaption):not(:where([class~=not-prose],[class~=not-prose] *)) {
    color: #000000;
    font-size: .875em;
    line-height: 1.4285714;
    margin-top: 0.8571429em;
}



a[class^="cite_note_"] {
    font-size:13px;
    font-weight:700;
    
}

.prose :where(tbody td:first-child,tfoot td:first-child):not(:where([class~=not-prose],[class~=not-prose] *)) {
    padding-left: 0;
    padding: 10px;
}



</style>

