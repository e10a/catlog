<?php

namespace App\Policies;

use App\User;
use App\Pet;
use Illuminate\Auth\Access\HandlesAuthorization;

class PetPolicy
{
    use HandlesAuthorization;
    /**
     * Determine whether the user can update the pet.
     *
     * @param  \App\User  $user
     * @param  \App\Pet  $pet
     * @return mixed
     */
    public function update(User $user, Pet $pet)
    {
        return $pet->owner_id == $user->id;
    }
}
