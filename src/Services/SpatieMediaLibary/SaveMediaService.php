<?php

namespace GrassFeria\Starterkid\Services\SpatieMediaLibary;

class SaveMediaService

{
    public function __construct($uploads,$record,string $collection, string $disk)
    {
        
            $tmpFilenames = [];
            foreach($uploads as $item){
                
                array_push($tmpFilenames,$item->temporaryUrl());
            }
        

        \GrassFeria\Starterkid\Jobs\SpatieMediaLibary\SaveMediaJob::dispatchSync($tmpFilenames,$record,$collection,$disk);
    }
}