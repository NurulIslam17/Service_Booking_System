<?php

namespace App\Services;

use App\Repositories\BookingRepository;

class BookingService
{
    protected $bookingRepository;
    public function __construct(BookingRepository $bookingRepository)
    {
        $this->bookingRepository = $bookingRepository;
    }


    public function get()
    {
        return $this->bookingRepository->getAll();
    }
    public function create($data)
    {
        $booking = [
            'user_id' => auth()->user()->id,
            'service_id' => $data['service_id'],
            'booking_date' => $data['booking_date'] ?? now(),
        ];
        return $this->bookingRepository->create($booking);
    }


    public function update($data, $id)
    {
        $booking = [
            'status' => $data['status']
        ];
        $this->bookingRepository->update($booking, $id);
    }
    public function delete($id)
    {
        $this->bookingRepository->delete($id);
    }
}
