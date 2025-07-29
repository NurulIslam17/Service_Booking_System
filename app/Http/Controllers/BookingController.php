<?php

namespace App\Http\Controllers;

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
        if ($data) {
            return $this->successResponse($data, 'Success', 200);
        }
        return $this->errorResponse('Something went wrong', [], 400);
    }
    public function store(Request $request)
    {
        $data =  $this->bookingService->create($request->all());
        if ($data) {
            return $this->successResponse($data, 'Success', 200);
        }
        return $this->errorResponse('Something went wrong', [], 400);
    }
}
