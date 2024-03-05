<?php

namespace GrassFeria\Starterkid\Livewire;

use Livewire\Component;

class ShowAudio extends Component
{
    
    public $record;
    public $collection;
    public $divClass;
    
    

    public function render()
    {
        return view('starterkid::livewire.show-audio');
    }

    public function placeholder()
    {
        return view('livewire.placeholder', ['placeholder' => __('Wait for storage')]);
    }
}
