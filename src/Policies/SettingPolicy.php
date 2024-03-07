<?php

namespace GrassFeria\Starterkid\Policies;


use App\Models\User;


class SettingPolicy
{
   
    public function update(User $user): bool
    {
        return $user->id === 1;
    }

   
}
