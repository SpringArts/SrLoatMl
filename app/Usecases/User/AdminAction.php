<?php


namespace App\UseCases\User;

use App\Models\Admin;
use App\Interfaces\User\AdminInterface;

class AdminAction
{

    private $adminRepository;

    public function __construct(AdminInterface $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    public function fetchPaginatedAdmins()
    {
        $limit = request()->limit ?? 10;
        $page = request()->page ?? 1;
        $data = $this->adminRepository->fetchPaginateAdmins($limit, $page);
        return $data;
    }

    public function store(array $data)
    {
        return $this->adminRepository->store($data);
    }

    public function fetchAdmin(Admin $admin)
    {
        return $this->adminRepository->fetchAdmin($admin);
    }

    public function update(array $data, Admin $admin)
    {
        return $this->adminRepository->update($data, $admin);
    }

    public function delete(Admin $admin)
    {
        return $this->adminRepository->delete($admin);
    }
}
