<?php

namespace GrassFeria\Starterkid\Livewire;

use Livewire\Component;

class ShowVideo extends Component
{
    
    public $record;
    public $collection;
    public $videoClass;
    
    

    public function render()
    {
        return view('starterkid::livewire.show-video');
    }

    public function placeholder()
    {
        return view('starterkid::livewire.placeholder', ['placeholder' => __('Wait for storage')]);
    }
}
