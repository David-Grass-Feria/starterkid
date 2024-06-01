<?php

namespace GrassFeria\Starterkid\Services\SpatieMediaLibary;

class SaveMediaWithFilenameService

{
    public function __construct($uploads,$record,string $collection,string $disk, string $filename)
    {
       
            $tmpFilenames = [];
            foreach($uploads as $item){
                
                array_push($tmpFilenames,$item->temporaryUrl());
            }
        

        \GrassFeria\Starterkid\Jobs\SpatieMediaLibary\SaveMediaWithFilenameJob::dispatch($tmpFilenames,$record,$collection,$disk,$filename);
    }
}