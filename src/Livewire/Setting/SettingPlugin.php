<?php

namespace GrassFeria\Starterkid\Livewire\Setting;


use ReflectionMethod;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;



class SettingPlugin extends Component
{



    public $plugins = [];




    public function mount()
    {

        $this->authorize('update', \GrassFeria\Starterkid\Models\Setting::class);
        $this->plugins = $this->getPluginsWithComposerInfoAndStatus();
        
    }


    public function getPluginsWithComposerInfoAndStatus()
    {
        $path = base_path('plugins/*/*/');
        $directories = glob($path, GLOB_ONLYDIR | GLOB_BRACE);
        $plugins = [];

        foreach ($directories as $directory) {
            $vendorName = basename(dirname($directory));
            $pluginName = basename($directory);
            $packageName = "{$vendorName}/{$pluginName}";
            $composerPath = base_path("plugins/{$vendorName}/{$pluginName}/composer.json");

            if (File::exists($composerPath)) {
                $composerContent = json_decode(File::get($composerPath), true);
                $providers = $composerContent['extra']['laravel']['providers'] ?? [];
                $isActive = false;

                foreach ($providers as $provider) {
                    
                    if (collect(app()->getLoadedProviders())->keys()->contains($provider)) {

                        $isActive = true;
                        break;
                    }
                }
                $plugins[] = [
                    'vendor' => $vendorName,
                    'plugin' => $pluginName,
                    'composer_info' => $composerContent,
                    'active' => $isActive,
                ];
            }
        }

        return $plugins;
    }


   



    public function render()
    {
        return view('starterkid::livewire.setting.setting-plugin');
    }
}
