<?php

namespace GrassFeria\Starterkid\Jobs\SpatieMediaLibary;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;



class SaveMediaJob implements ShouldQueue
{
   
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    public $tmpFilenames;
    public $record;
    public $collection;
    public $disk;
    public function __construct(array $tmpFilenames, $record, string $collection, string $disk)
    {
        $this->tmpFilenames     = $tmpFilenames;
        $this->record           = $record;
        $this->collection       = $collection;
        $this->disk             = $disk;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        
        
        foreach($this->tmpFilenames as $media){
            
            $mediaName = explode('?', basename($media))[0];
            $livewireTmpFilePath = base_path('storage'.'/'.'app'.'/'.'livewire-tmp'.'/'.$mediaName);
            $this->record->addMedia($livewireTmpFilePath)->toMediaCollection($this->collection,$this->disk);

            
            
        }

        // check if frontend cache is active
        if (!config()->has('starterkid-frontend.frontend_cache') || config('starterkid-frontend.frontend_cache') == true) {
               
            $url = route('front.shelter.show', ['slug' => $this->record->slug]);
            $cacheKey = \GrassFeria\StarterkidFrontend\Services\GetCacheKey::ForUrl($url);
            \Illuminate\Support\Facades\Cache::forget($cacheKey);
            \GrassFeria\StarterkidFrontend\Jobs\PreloadCacheJob::dispatch($url);
           }
    }
}
