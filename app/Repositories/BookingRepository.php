<?php

namespace App\Repositories;

use App\Models\Booking;


class BookingRepository
{
    public function getAll()
    {
        $user = auth()->user();
        $query = Booking::with('service');

        if (!$user->is_admin) {
            $query->where('user_id', $user->id);
        }
        return $query->get();
    }
    public function create($data)
    {
        return Booking::create($data);
    }
    public function update($data, $id)
    {
        return Booking::where('id', $id)->update($data);
    }
    public function delete($id)
    {
        return Booking::where('id', $id)->delete();
    }
}
