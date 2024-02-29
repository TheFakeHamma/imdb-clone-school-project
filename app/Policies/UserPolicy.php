<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    // /**
    //  * Determine whether the user can view any models.
    //  */
    // public function viewAny(User $user): bool
    // {
    //     //
    // }

    // /**
    //  * Determine whether the user can view the model.
    //  */
    // public function view(User $user, User $model): bool
    // {
    //     //
    // }

    // /**
    //  * Determine whether the user can create models.
    //  */
    // public function create(User $user): bool
    // {
    //     //
    // }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id || $currentUser->role === 'admin';
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id || $currentUser->role === 'admin';
    }
}
