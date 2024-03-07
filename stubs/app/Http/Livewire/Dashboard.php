<?php

namespace App\Http\Livewire;

use Livewire\Component;


class Dashboard extends Component
{


    public function render()
    {
        $usersCount = \App\Models\User::count();
        return view('livewire.dashboard',['usersCount' => $usersCount]);
    }
}
