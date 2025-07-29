<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceCreateRequest;
use App\Http\Requests\ServiceUpdateRequest;
use App\Services\ServiceService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    use ApiResponse;
    protected $serviceService;
    public function __construct(ServiceService $serviceService)
    {
        $this->serviceService = $serviceService;
    }

    public function index()
    {
        $services = $this->serviceService->getAll();
        if ($services) {
            return $this->successResponse($services, 'Service fetched successfully');
        }
        return $this->errorResponse('Data fetched failed', [], 500);
    }
    public function store(ServiceCreateRequest $request)
    {
        $service = $this->serviceService->store($request->all());
        return $this->successResponse($service, 'Service created successfully');
    }
    public function update(ServiceUpdateRequest $request, $id)
    {
        $this->serviceService->update($request->all(), $id);
        return $this->successResponse([], 'Service updated successfully');
    }
    public function delete($id)
    {
        $this->serviceService->delete($id);
        return $this->successResponse([], 'Service deleted successfully');
    }
}
