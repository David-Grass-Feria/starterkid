<?php

namespace GrassFeria\Starterkid\Livewire\User;

use Livewire\Component;




class UserCreate extends Component
{
    

    public $user;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $bio;



    public function mount($recordId = null)
    {
        
        $this->authorize('create',\App\Models\User::class);
            
    }

    public function save()
    {

        
        $validated = $this->validate([
                'name'           => 'required|string|max:255',
                'email'          => 'required|string|email',
                'password'       => 'required|string|confirmed',
                'password_confirmation' => 'required|string',
                'bio'           => 'nullable|string|max:10000',
     
        ]);
        
        
        $this->authorize('update',\App\Models\User::class);
        $this->user = (new \App\Actions\Fortify\CreateNewUser())->create($validated);
        return redirect()->route('users.index')->with('success', __('User created'));
        

        

    }
    public function render()
    {
        return view('starterkid::livewire.user.user-create');
    }
}
