<?php

namespace App\Repositories;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use App\Models\User;

/**
 * Class BoardRepository.
 */
class BoardRepository extends BaseRepository
{
     /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return $user->boards()
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}
