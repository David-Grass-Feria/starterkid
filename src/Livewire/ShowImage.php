<?php

namespace GrassFeria\Starterkid\Livewire;

use Livewire\Component;

class ShowImage extends Component
{
    
    public $record;
    public $collection;
    public $imgClass;
    public $divClass;
    public $enableFileDelete;
 

    
    public function deleteSingleFile($fileId)
    {
        $mediaItems = $this->record->getMedia($this->collection);
            foreach($mediaItems as $mediaItem){
                
                if($fileId === $mediaItem->id){
                    $mediaItem->delete();
                    return redirect(request()->header('Referer'));
                }
                
            }
    }
    
    public function render()
    {
        return view('starterkid::livewire.show-image');
    }

    public function placeholder()
    {
        return view('starterkid::livewire.placeholder', ['placeholder' => __('Wait for storage')]);
    }
}
