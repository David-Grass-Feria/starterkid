<?php

namespace GrassFeria\Starterkid\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\UniqueConstraintViolationException;

class WebInstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'starterkid:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the application';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        
        
        Artisan::call('vendor:publish',['--force' => true,'--provider' => 'GrassFeria\Starterkid\Providers\AppServiceProvider']);
        Artisan::call('migrate',['--force' => true]);
        Artisan::call('db:seed', ['class'=> 'GrassFeria\\Starterkid\\Database\\Seeders\\SettingSeeder']);
        Artisan::call('db:seed', ['class'=> 'GrassFeria\\Starterkid\\Database\\Seeders\\AdminSeeder']);
        return $this->info('Great! You can login on<br>'.url('/login').'<br>email: admin@admin.com<br>password: password');
       
        
       
    }

    

    
}
