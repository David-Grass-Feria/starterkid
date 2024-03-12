<?php

namespace GrassFeria\Starterkid\Services;

use DOMDocument;

class CheckCkEditorContent

{
    
    public $model;
    public $dbColumnName;
    public $modelDBContent;
    public $collection;
    public $disk;
    
    
    public function __construct($model,$modelDBContent, string $dbColumnName, string $collection, string $disk)
    {
        $this->model            = $model;
        $this->modelDBContent   = $modelDBContent;
        $this->dbColumnName     = $dbColumnName;
        $this->collection       = $collection;
        $this->disk             = $disk;
    }

    public function checkForCkEditorImages()
    {

        $dom = new DOMDocument();
        @$dom->loadHTML(mb_convert_encoding($this->modelDBContent, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $image) {
            $tempSrc = $image->getAttribute('src');

           
            if (strpos($tempSrc, '/temp/') !== false) {
                $path = str_replace(url('/storage'), storage_path('app/public'), $tempSrc);
                $mediaItem = $this->model->addMedia($path)->toMediaCollection($this->collection,$this->disk);
                $newSrc = $mediaItem->getUrl();
                $image->setAttribute('src', $newSrc);
                }
        }

        
        $newHtml = $dom->saveHTML();

        
        $this->model->update([
            $this->dbColumnName => $newHtml
        ]);
    }
}