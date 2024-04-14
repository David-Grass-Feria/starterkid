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
    public $public_logos = [];
    public $public_favicons = [];
    public $banner_message;




    public function mount($id)
    {

        $this->authorize('update', \GrassFeria\Starterkid\Models\Setting::class);
        $this->setting                                  = \GrassFeria\Starterkid\Models\Setting::find(1);
        $this->banner_message                            = $this->setting->banner_message;
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

       
        Cache::forget('favicon');
        Cache::forget('logo');

        return redirect()->route('settings.edit', 1)->with('success', __('The design has been reset.'));
    }

    public function clearTempFolders()
    {
        Artisan::call('starterkid:clear-temp-folders');
        return redirect()->route('settings.edit', 1)->with('success', __('Temporary files have been removed.'));
    }

    




    public function save()
    {

        $this->authorize('update', \GrassFeria\Starterkid\Models\Setting::class);
        $validated = $this->validate([
           'banner_message'                        => 'nullable|string|max:255',

        ]);
        $this->setting->update($validated);


        if ($this->public_logos !== []) {
            \GrassFeria\Starterkid\Jobs\SpatieMediaLibary\DeleteMediaCollection::dispatch($this->setting, 'logo');
            (new \GrassFeria\Starterkid\Services\SpatieMediaLibary\SaveMediaWithFilenameService($this->public_logos,$this->setting,'logo','public',config('app.name')));
            //(new \GrassFeria\Starterkid\Services\SpatieMediaLibary\SaveMediaService($this->public_logos, $this->setting, 'logo', 'public'));
        }




        if ($this->public_favicons !== []) {
            \GrassFeria\Starterkid\Jobs\SpatieMediaLibary\DeleteMediaCollection::dispatch($this->setting, 'favicon');
            (new \GrassFeria\Starterkid\Services\SpatieMediaLibary\SaveMediaService($this->public_favicons, $this->setting, 'favicon', 'public'));
            \GrassFeria\Starterkid\Jobs\UnzipFaviconJob::dispatch();
        }


        Artisan::call('cache:clear');
        return redirect()->route('settings.edit', 1)->with('success', __('Setting updated'));
    }

    public function removeFile($fileId)
    {
       
        // delete files if click delete button on filepond form
        
        // public_photos
         Storage::delete('livewire-tmp'.'/'.$fileId);
         foreach($this->public_logos as $key => $file){
           if($file->getFilename() == $fileId){
             unset($this->public_logos[$key]);
           }
         }

         // public_photos
         Storage::delete('livewire-tmp'.'/'.$fileId);
         foreach($this->public_favicons as $key => $file){
           if($file->getFilename() == $fileId){
             unset($this->public_favicons[$key]);
           }
         }

         // more here
 
    }


    public function render()
    {
        return view('starterkid::livewire.setting.setting-edit');
    }
}
