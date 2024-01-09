<?php


namespace App\Interfaces\User;

use App\Models\User;

interface UserInterface
{

    public function fetchPaginateUsers(int $limit, int $page);
    public function fetchUser(User $user);
    public function store(array $data);
    public function update(array $data, User $user);
    public function delete(User $user);
}
