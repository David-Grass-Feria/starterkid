<?php

namespace GrassFeria\Starterkid\Livewire;

use Livewire\Component;


class Dashboard extends Component
{


    public function render()
    {
        $usersCount = \App\Models\User::count();
        return view('starterkid::livewire.dashboard',['usersCount' => $usersCount]);
    }
}
