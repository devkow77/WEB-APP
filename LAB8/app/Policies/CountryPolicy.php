<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Country;
use App\Models\User;

class CountryPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Country $country): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Country $country): bool
    {
        return $user->country_id === $country->id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Country $country): bool
    {
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Country $country): bool
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Country $country): bool
    {
        return true;
    }
}
