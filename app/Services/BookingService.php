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
            'service_id' => $data['service_id_'],
            'booking_date' => now(),
        ];
        return $this->bookingRepository->create($booking);
    }
}
