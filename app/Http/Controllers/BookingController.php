<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function create()
    {
        return view('home.booking');
    }

    public function store(Request $request)
    {
        $request->validate([
            'destination' => 'required|string',
            'travel_date' => 'required|date',
            'passengers' => 'required|integer|min:1',
            'notes' => 'nullable|string',
        ]);

        Booking::create($request->all());

        return redirect()->back()->with('success', 'Booking successful!');
    }
}
