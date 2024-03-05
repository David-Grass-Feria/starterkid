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
        
        try {
        Artisan::call('migrate',['--force' => true]);
        Artisan::call('db:seed', ['class'=> 'GrassFeria\\StarterkidSetting\\Database\\Seeders\\SettingSeeder']);
        Artisan::call('db:seed', ['class'=> 'GrassFeria\\StarterkidUser\\Database\\Seeders\\AdminSeeder']);

        return $this->info('Great! You can login on<br>'.url('/login').'<br>email: admin@admin.com<br>password: password');
        } catch (UniqueConstraintViolationException $e) {
            $this->error('You already have all the entries in the database. You can log in.');
        } catch (QueryException $e) {
            $this->error('No database connection.');
        }
        
       
    }

    

    
}
