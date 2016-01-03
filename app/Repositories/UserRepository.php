<?php

namespace App\Repositories;

use App\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository
{
    /**
     * @return Collection
     */
    public function getUserPost() : Collection
    {
        return User::join('posts', 'users.id', '=', 'posts.user_id')
            ->where('users.id', '>', 2)
            ->where('posts.id', '<', 6)
            ->get();
    }
}