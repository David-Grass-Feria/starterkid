<?php

namespace GrassFeria\Starterkid\Services;

use Illuminate\Support\Facades\Storage;

class GetFileSizeService

{


    public function get(string $value,int $round = 2)
    {

        $bytes = $value;
        $units = ['B','KB','MB','GB','TB','PB'];
        for ($i = 0; $bytes > 1024; $i++){
            $bytes /= 1024;
        }

        return round($bytes,$round) . $units[$i];



    }







}
