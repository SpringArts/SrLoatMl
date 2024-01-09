<?php

namespace App\Repositories\User;

use App\Interfaces\User\AdminInterface;
use App\Models\Admin;

class AdminRepository implements AdminInterface
{

    public function fetchPaginateAdmins(int $limit, int $page)
    {
        return Admin::paginate($limit, ['*'], 'page', $page)->withQueryString();
    }

    public function fetchAdmin(Admin $admin)
    {
        return $admin;
    }

    public function store(array $data)
    {
        return Admin::create($data);
    }

    public function update(array $data, Admin $admin)
    {
        return $admin->update($data);
    }

    public function delete(Admin $admin)
    {
        return $admin->delete();
    }
}
