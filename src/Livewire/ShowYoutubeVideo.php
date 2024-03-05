<?php

namespace GrassFeria\Starterkid\Livewire;

use Livewire\Component;

class ShowYoutubeVideo extends Component
{
    
    public $youtubeLink;
    public $iframeClass;
    
    

    public function mount($youtubeLink)
    {
       $replace1 = str_replace('https://www.youtube.com/watch?v=','https://www.youtube-nocookie.com/embed/',$youtubeLink);
       $replace2 = explode('&', $replace1, 2)[0];
       $this->youtubeLink = $replace2;
    }
    
    public function render()
    {
        return view('starterkid::livewire.show-youtube-video');
    }

    public function placeholder()
    {
        return view('starterkid::livewire.placeholder', ['placeholder' => __('Wait for storage')]);
    }
}
