<?php

namespace GrassFeria\Starterkid\Traits;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

trait TeamManagmentPolicyTrait
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Model $model): bool
    {
        
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Model $model): bool
    {
        
        return true;
    }

    public function delete(User $user, Model $model): bool
    {
       return true;
    }
}
