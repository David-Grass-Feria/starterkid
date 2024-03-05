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
        if ($model->team_id === $user->currentTeam->id && $user->hasTeamRole($model->team, 'admin')) {
            return true;
        }
        if ($model->team_id === $user->currentTeam->id && $user->hasTeamRole($model->team, 'editor')) {
            return true;
        }
        if ($model->team_id === $user->currentTeam->id && $user->hasTeamRole($model->team, 'observer')) {
            return true;
        }

        return false;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Model $model): bool
    {
        if ($model->team_id === $user->currentTeam->id && $user->hasTeamRole($model->team, 'admin')) {
            return true;
        }
        if ($model->team_id === $user->currentTeam->id && $user->hasTeamRole($model->team, 'editor')) {
            return true;
        }

        return false;
    }

    public function delete(User $user, Model $model): bool
    {
        return $model->team_id === $user->currentTeam->id && $user->hasTeamRole($model->team, 'admin');
    }
}
