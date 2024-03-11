<?php

namespace GrassFeria\Starterkid\Traits;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

trait OnlyUserRecordPolicyTrait
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Model $model): bool
    {
        
        return $user->id === $model->user_id;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Model $model): bool
    {
        
        return $user->id === $model->user_id;
    }

    public function delete(User $user, Model $model): bool
    {
       return true;
    }
}
