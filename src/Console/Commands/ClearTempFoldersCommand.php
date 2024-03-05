<?php

namespace GrassFeria\Starterkid\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class ClearTempFoldersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'starterkid:clear-temp-folders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear livewire temp folder and the public temp folder';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->deleteLivewireTempFiles();
        

        return $this->info('success');
    }

    private function deleteLivewireTempFiles()
    {
        $path = '/livewire-tmp';
        $files = Storage::files($path);
        
        foreach($files as $file){
            Storage::delete($file);
        }

        
    }

    
}
