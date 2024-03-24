<?php

namespace GrassFeria\Starterkid\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
   
    public function viewAny(User $user): bool
    {
        return $user->role == config('starterkid.global_admin') OR $user->role == 'admin';
    }


   
    public function create(User $user): bool
    {
        return $user->role == config('starterkid.global_admin') OR $user->role == 'admin';
    }

    
    public function update(User $user): bool
    {
        return $user->role == config('starterkid.global_admin') OR $user->role == 'admin';
    }

    public function delete(User $user): bool
    {
        return $user->role == config('starterkid.global_admin') OR $user->role == 'admin';
    }

   

    
}
