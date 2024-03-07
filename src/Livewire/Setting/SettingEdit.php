<?php

namespace GrassFeria\Starterkid\Livewire\Setting;

use ZipArchive;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;


class SettingEdit extends Component
{
    use WithFileUploads;

    public $setting;
    public $primary_color;
    public $secondary_color;
    public $font_color;
    public $font_color_on_dark_background;
    public $font_family;
    public $public_logos = [];
    public $public_favicons = [];




    public function mount($id)
    {

        $this->authorize('update', \GrassFeria\Starterkid\Models\Setting::class);
        $this->setting                                  = \GrassFeria\Starterkid\Models\Setting::find(1);
        $this->primary_color                             = $this->setting->primary_color;
        $this->secondary_color                           = $this->setting->secondary_color;
        $this->font_color                                = $this->setting->font_color;
        $this->font_color_on_dark_background             = $this->setting->font_color_on_dark_background;
        $this->font_family                               = $this->setting->font_family;
    }

    public function resetSettings()
    {

        $this->authorize('update', \GrassFeria\Starterkid\Models\Setting::class);
        //delete favicons
        if ($this->setting->getMedia('favicon')->isNotEmpty()) {
            $files = $this->setting->getMedia('favicon');
            foreach ($files as $file) {
                $file->delete();
            }
        }


        //delete logo
        if ($this->setting->getMedia('logo')->isNotEmpty()) {
            $files = $this->setting->getMedia('logo');
            foreach ($files as $file) {
                $file->delete();
            }
        }

        // reset database settings
        $setting = \GrassFeria\Starterkid\Models\Setting::find(1);
        $setting->update([
            'primary_color'                         => config('starterkid.primary_color'),
            'secondary_color'                       => config('starterkid.secondary_color'),
            'font_color'                            => config('starterkid.font_color'),
            'font_color_on_dark_background'         => config('starterkid.font_color_on_dark_background'),
            'font_family'                           => config('starterkid.font_familiy'),
        ]);


        Cache::forget('favicon');
        Cache::forget('logo');

        return redirect()->route('settings.edit', 1)->with('success', __('The design has been reset.'));
    }

    public function clearTempFolders()
    {
        Artisan::call('starterkid:clear-temp-folders');
        return redirect()->route('settings.edit', 1)->with('success', __('Temporary files have been removed.'));
    }

    public function clearAllCaches()
    {
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        return redirect()->route('settings.edit', 1)->with('success', __('Cache cleared'));
    }




    public function save()
    {

        $this->authorize('update', \GrassFeria\Starterkid\Models\Setting::class);
        $validated = $this->validate([
            'primary_color'                         => 'required|string|max:7',
            'secondary_color'                       => 'required|string|max:7',
            'font_color'                            => 'required|string|max:7',
            'font_family'                           => 'required|string|max:255',
            'font_color_on_dark_background'         => 'required|string|max:7',

        ]);
        $this->setting->update($validated);


        if ($this->public_logos !== []) {
            \GrassFeria\Starterkid\Jobs\SpatieMediaLibary\DeleteMediaCollection::dispatch($this->setting, 'logo');
            //(new \GrassFeria\Starterkid\Services\SpatieMediaLibary\SaveMediaWithFilenameService($this->logos,$this->setting,'logo','public','my-new-filename'));
            (new \GrassFeria\Starterkid\Services\SpatieMediaLibary\SaveMediaService($this->public_logos, $this->setting, 'logo', 'public'));
        }




        if ($this->public_favicons !== []) {
            \GrassFeria\Starterkid\Jobs\SpatieMediaLibary\DeleteMediaCollection::dispatch($this->setting, 'favicon');
            (new \GrassFeria\Starterkid\Services\SpatieMediaLibary\SaveMediaService($this->public_favicons, $this->setting, 'favicon', 'public'));
            \GrassFeria\Starterkid\Jobs\UnzipFaviconJob::dispatch();
        }



        Cache::forget('favicon');
        Cache::forget('logo');
        return redirect()->route('settings.edit', 1)->with('success', __('Setting updated'));
    }
    public function render()
    {
        return view('starterkid::livewire.setting.setting-edit');
    }
}
