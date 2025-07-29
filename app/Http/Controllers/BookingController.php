<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingCreateRequest;
use App\Services\BookingService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    use ApiResponse;
    protected $bookingService;
    public function __construct(BookingService $bookingService)
    {
        $this->bookingService = $bookingService;
    }

    public function get()
    {
        $data =  $this->bookingService->get();
        return $this->successResponse($data, 'Success', 200);
    }
    public function store(BookingCreateRequest $request)
    {
        $data =  $this->bookingService->create($request->all());
        return $this->successResponse($data, 'Success', 200);
    }
    public function update(Request $request, $id)
    {
        $this->bookingService->update($request->all(), $id);
        return $this->successResponse([], 'Updated', 200);
    }

    public function delete($id)
    {
        $this->bookingService->delete($id);
        return $this->successResponse([], 'Deleted', 200);
    }
}
