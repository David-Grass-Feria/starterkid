<?php

namespace GrassFeria\Starterkid\Livewire\User;

use App\Models\User;
use Livewire\Component;




class UserEdit extends Component
{
    

    public $user;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $bio;
    public $role;



    public function mount($recordId = null)
    {
        
            
            $this->authorize('update',\App\Models\User::class);   
            $this->user         = \App\Models\User::find($recordId);
            $this->name         = $this->user->name;
            $this->email        = $this->user->email;
            $this->bio          = $this->user->bio;
            $this->role         = $this->user->role;

            if($this->user->role === config('starterkid.global_admin')){
                abort(403,__('You can not edit a'). config('starterkid.global_admin'));
            }
            
       

    }

    public function save()
    {

       
            $validated = $this->validate([
                'name'                              => 'required|string|max:255',
                'email'                             => 'required|string|email',
                'bio'                               => 'nullable|string|max:10000',
                'role'                              => 'required|string|in:' . implode(',', array_column(User::ROLES, 'key')),
                
     
             ]);
       
            $this->authorize('create',\App\Models\User::class);
            $this->user->update($validated);
            return redirect()->route('users.index')->with('success', __('User updated'));
        

        

    }
    public function render()
    {
        return view('starterkid::livewire.user.user-edit');
    }
}
