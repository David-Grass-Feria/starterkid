<?php

namespace GrassFeria\Starterkid\Services;

use DOMDocument;

class CheckCkEditorContent

{


    public $dbColumnName;
    public $modelDBContent;
   
  


    public function __construct($modelDBContent, string $dbColumnName)
    {
        
        $this->modelDBContent   = $modelDBContent;
        $this->dbColumnName     = $dbColumnName;
     
    }

    public function checkForCkEditorImages($model, string $collection, string $disk)
    {

        $dom = new DOMDocument();
        @$dom->loadHTML(mb_convert_encoding($this->modelDBContent, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $image) {
            $tempSrc = $image->getAttribute('src');


            if (strpos($tempSrc, '/temp/') !== false) {
                $path = str_replace(url('/storage'), storage_path('app/public'), $tempSrc);
                $mediaItem = $model->addMedia($path)->toMediaCollection($collection, $disk);
                $newSrc = $mediaItem->getUrl();
                $image->setAttribute('src', $newSrc);
            }
        }


        $newHtml = $dom->saveHTML();

        $model->update([
            $this->dbColumnName => $newHtml
        ]);
    }

    public function checkForYoutubeLinks()
    {
        $html = $this->modelDBContent; // Angenommen, dies ist der ursprüngliche HTML-Inhalt aus deiner Datenbank

        $replace1 = str_replace('https://www.youtube.com/watch?v=','https://www.youtube-nocookie.com/embed/',$html);
        $replace2 = explode('&', $replace1, 2)[0];
        $neuesHtml = $replace2;
        // Ersetze die YouTube-Links
       

        // Aktualisiere den Eintrag in der Datenbank mit dem neuen HTML-Inhalt
        $this->model->update([
            $this->dbColumnName => $neuesHtml
        ]);
    }
}
