<?php

namespace GrassFeria\Starterkid\Jobs\SpatieMediaLibary;

use Illuminate\Support\Str;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SaveMediaWithFilenameJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tmpFilenames;
    public $record;
    public $collection;
    public $filename;
    public $disk;

    public function __construct(array $tmpFilenames, $record, string $collection, string $disk, string $filename)
    {
        $this->tmpFilenames     = $tmpFilenames;
        $this->record           = $record;
        $this->collection       = $collection;
        $this->filename         = $filename;
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
            $fileExtension = pathinfo($mediaName, PATHINFO_EXTENSION);
            $newFilename = Str::slug($this->filename);
            $this->record->addMedia($livewireTmpFilePath)->usingFileName($newFilename.'.'.$fileExtension)->toMediaCollection($this->collection,$this->disk);
        }
    }
}
