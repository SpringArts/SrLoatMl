<?php


namespace App\Interfaces\User;

use App\Models\Admin;

interface AdminInterface
{

    public function fetchPaginateAdmins(int $limit, int $page);
    public function fetchAdmin(Admin $admin);
    public function store(array $data);
    public function update(array $data, Admin $admin);
    public function delete(Admin $admin);
}
