<?php

namespace App\Repositories\User;

use App\Interfaces\User\UserInterface;
use App\Models\User;

class UserRepository implements UserInterface
{

    public function fetchPaginateUsers(int $limit, int $page)
    {
        return User::paginate($limit, ['*'], 'page', $page)->withQueryString();
    }

    public function fetchUser(User $user)
    {
        return $user;
    }

    public function store(array $data)
    {
        return User::create($data);
    }

    public function update(array $data, User $user)
    {
        return $user->update($data);
    }

    public function delete(User $user)
    {
        return $user->delete();
    }
}
