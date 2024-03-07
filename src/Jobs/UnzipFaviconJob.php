<?php

namespace GrassFeria\Starterkid\Jobs;

use ZipArchive;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class UnzipFaviconJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $setting = \GrassFeria\Starterkid\Models\Setting::find(1);
        $folderId = $setting->getMedia('favicon')[0]->id;
        
        $zip = new ZipArchive;
        $files = Storage::files('public'.'/'.$folderId);
        foreach($files as $file){
            $filename = basename($file);
            
            if ($zip->open(storage_path('app'.'/'.'public'.'/'.$folderId.'/'.$filename))) {
                $zip->extractTo(storage_path('app'.'/'.'public'.'/'.$folderId.'/'));
                $zip->close();
                return redirect(route('settings.edit',1));
            } else {
                return abort('403', 'wrong');
            }
            
        }
    }
}
