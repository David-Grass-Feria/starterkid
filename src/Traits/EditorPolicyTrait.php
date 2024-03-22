<?php

namespace GrassFeria\Starterkid\Traits;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

trait EditorPolicyTrait
{
    public function viewAny(User $user): bool
    {
        return $user->role == config('starterkid.global_admin') OR $user->role == 'admin' OR $user->role == 'editor';
    }

    public function view(User $user, Model $model): bool
    {
        
        return $user->role == config('starterkid.global_admin') OR $user->role == 'admin' OR $user->role == 'editor';
    }

    public function create(User $user): bool
    {
        return $user->role == config('starterkid.global_admin') OR $user->role == 'admin' OR $user->role == 'editor';
    }

    public function update(User $user, Model $model): bool
    {
        
        return $user->role == config('starterkid.global_admin') OR $user->role == 'admin' OR $user->role == 'editor';
    }

    public function delete(User $user, Model $model): bool
    {
        return $user->role == config('starterkid.global_admin') OR $user->role == 'admin';
    }
}
