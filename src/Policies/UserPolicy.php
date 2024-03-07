<?php

namespace GrassFeria\Starterkid\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
   
    public function viewAny(User $user): bool
    {
        return $user->id === 1;
    }


   
    public function create(User $user): bool
    {
        return $user->id === 1;
    }

    
    public function update(User $user): bool
    {
        return $user->id === 1;
    }

    public function delete(User $user): bool
    {
        return $user->id === 1;
    }

   

    
}
