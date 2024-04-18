<?php

namespace GrassFeria\Starterkid\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class CreateBackupCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'starterkid:create-backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create backup';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        
        \GrassFeria\Starterkid\Jobs\CreateBackupJob::dispatch();

        return $this->info('backup created');
    }

   

    
}
