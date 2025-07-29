<?php

namespace App\Repositories;

use App\Models\Booking;


class BookingRepository
{
    public function getAll()
    {
        return Booking::all();
    }
    public function create($data)
    {
        return Booking::create($data);
    }
}
