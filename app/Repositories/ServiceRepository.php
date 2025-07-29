<?php

namespace App\Repositories;

use App\Models\Service;
use App\Models\User;

class ServiceRepository
{
    public function getAll()
    {
        return Service::all();
    }

    public function store($data)
    {
        return Service::create($data);
    }
    public function update($data, $id)
    {
        Service::where('id', $id)->update($data);
    }
    public function delete($id)
    {
        Service::where('id', $id)->delete();
    }
}
