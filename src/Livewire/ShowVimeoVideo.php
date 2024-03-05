<?php

namespace GrassFeria\Starterkid\Livewire;

use Livewire\Component;

class ShowVimeoVideo extends Component
{
    
    public $vimeoLink;
    public $iframeClass;
    
    

    public function mount($vimeoLink)
    {
       $replace1 = str_replace('https://vimeo.com/','https://player.vimeo.com/video/',$vimeoLink);
       $replace2 = explode('&', $replace1, 2)[0];
       $this->vimeoLink = $replace2;
      
    }
    
    public function render()
    {
        return view('starterkid::livewire.show-vimeo-video');
    }

    public function placeholder()
    {
        return view('starterkid::livewire.placeholder', ['placeholder' => __('Wait for storage')]);
    }
}
