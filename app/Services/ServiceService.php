<?php

namespace App\Services;

use App\Exceptions\NotLoggedInException;
use App\Repositories\ServiceRepository;


class ServiceService
{

    protected $serviceRepository;
    public function __construct(ServiceRepository $serviceRepository)
    {
        $this->serviceRepository = $serviceRepository;
    }

    public function getAll()
    {
        return  $this->serviceRepository->getAll();
    }
    public function store($data)
    {
        return  $this->serviceRepository->store($data);
    }
    public function update($data, $id)
    {
        $this->serviceRepository->update($data, $id);
    }

    public function delete($id)
    {
        $this->serviceRepository->delete($id);
    }
}
