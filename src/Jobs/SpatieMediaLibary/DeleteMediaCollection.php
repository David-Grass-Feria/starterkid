<?php

namespace GrassFeria\Starterkid\Jobs\SpatieMediaLibary;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DeleteMediaCollection implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $record;
    public $collection;

    public function __construct($record, string $collection)
    {
        $this->record           = $record;
        $this->collection       = $collection;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $mediaItems = $this->record->getMedia($this->collection);
            foreach($mediaItems as $mediaItem){
                $mediaItem->delete();
            }
    }
}
