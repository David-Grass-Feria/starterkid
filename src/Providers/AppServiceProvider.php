<?php

namespace GrassFeria\Starterkid\Providers;

use Livewire\Livewire;
use Illuminate\Support\Facades\View;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Providers\PluginServiceProvider;
use Illuminate\Console\Scheduling\Schedule;
use GrassFeria\Starterkid\Console\Commands\WebInstallCommand;
use GrassFeria\Starterkid\Console\Commands\MakeResourceCommand;
use GrassFeria\Starterkid\Console\Commands\ClearTempFoldersCommand;
use GrassFeria\Starterkid\Console\Commands\ComposerDumpAutoloadCommand;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
        $this->app->register(AuthServiceProvider::class);
        $this->app->register(NavlinkServiceProvider::class);
        $this->app->register(PluginServiceProvider::class);
        
        
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Kernel $kernel)
    {
        //$kernel->prependMiddlewareToGroup('web', \GrassFeria\Starterkid\Http\Middleware\CheckIfAppIsLocal::class);
        
        
       
        if(Schema::hasTable('settings')){
            
        
        $setting = \GrassFeria\Starterkid\Models\Setting::find(1);
        if($setting){
            View::share('settingPrimaryColor', $setting->primary_color);
            View::share('settingSecondaryColor', $setting->secondary_color);
            View::share('settingFontColor', $setting->font_color);
            View::share('settingFontColorOnDarkBackground', $setting->font_color_on_dark_background);
            View::share('settingFontFamily', $setting->font_family);
        
        

                if ($setting->hasMedia('logo')) {
                    $logo = Cache::rememberForever('logo', function () use ($setting) {
                        return $setting->getFirstMediaUrl('logo');
                    });
                }

                if ($setting->hasMedia('favicon')) {
                    $favicon = Cache::rememberForever('favicon', function () use ($setting) {
                        return $setting->getMedia('favicon')[0]->id;
                    });
                    $folderId = Cache::get('favicon');
                    View::share('settingsFaviconFolderId', $folderId);
                }
            }
        }
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'starterkid');
        $this->loadJsonTranslationsFrom(__DIR__.'/../../lang');
        
        Livewire::component('starterkid::show-image', \GrassFeria\Starterkid\Livewire\ShowImage::class);
        Livewire::component('starterkid::show-audio', \GrassFeria\Starterkid\Livewire\ShowAudio::class);
        Livewire::component('starterkid::show-file', \GrassFeria\Starterkid\Livewire\ShowFile::class);
        Livewire::component('starterkid::show-video', \GrassFeria\Starterkid\Livewire\ShowVideo::class);
        Livewire::component('starterkid::show-vimeo-video', \GrassFeria\Starterkid\Livewire\ShowVimeoVideo::class);
        Livewire::component('starterkid::show-youtube-video', \GrassFeria\Starterkid\Livewire\ShowYoutubeVideo::class);
        Livewire::component('starterkid::setting-edit',\GrassFeria\Starterkid\Livewire\Setting\SettingEdit::class);
        Livewire::component('starterkid::setting-plugin',\GrassFeria\Starterkid\Livewire\Setting\SettingPlugin::class);
        Livewire::component(\GrassFeria\Starterkid\Traits\LivewireIndexTrait::class);
        Livewire::component('user::user-create',\GrassFeria\Starterkid\Livewire\User\UserCreate::class);
        Livewire::component('user::user-edit',\GrassFeria\Starterkid\Livewire\User\UserEdit::class);
        Livewire::component('user::user-index',\GrassFeria\Starterkid\Livewire\User\UserIndex::class);

       

        $this->commands([
                MakeResourceCommand::class,
                ClearTempFoldersCommand::class,
                WebInstallCommand::class,
                
                
                
        ]);

        
        

        $this->publishes([
            __DIR__.'/../../stubs' => base_path('/'),
        ], 'starterkid');
        
        
        
    }
}
