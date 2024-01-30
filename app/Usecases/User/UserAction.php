<?php


namespace App\UseCases\User;

use App\Models\User;
use App\Interfaces\User\UserInterface;

class UserAction
{

    private $userRepository;

    public function __construct(UserInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function fetchPaginatedUsers()
    {
        $limit = request()->limit ?? 10;
        $page = request()->page ?? 1;
        $data = $this->userRepository->fetchPaginateUsers($limit, $page);
        return $data;
    }

    public function store(array $data)
    {
        return $this->userRepository->store($data);
    }

    public function fetchUser(User $user)
    {
        return $this->userRepository->fetchUser($user);
    }

    public function update(array $data, User $user)
    {
        return $this->userRepository->update($data, $user);
    }

    public function delete(User $user)
    {
        return $this->userRepository->delete($user);
    }
}
