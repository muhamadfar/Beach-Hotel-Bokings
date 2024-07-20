<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'checkin' => 'required|date',
            'checkout' => 'required|date',
            'nrooms' => 'required',
            'room_type' => 'required',
        ]);

        Booking::create($request->all());

        return redirect('/')->with('success', 'Booking created successfully.');
    }
}
