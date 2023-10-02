<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ReservationController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
        $roomType = $request->input('room_type');
        $totalDays = $request->input('total_days');
        $totalRooms = $request->input('total_rooms');

        $roomRates = [
            "Single" => 1500,
            "Deluxe" => 2500,
            "Family" => 3000,
        ];

        $roomRatePerDay = $roomRates[$roomType];
        $totalAmount = $totalRooms * $totalDays * $roomRatePerDay;

        $discount = ($totalRooms >= 3) ? ($totalAmount * 0.10) : 0;

        $totalAmountDue = $totalAmount - $discount;

        return view('form', compact('roomType', 'roomRatePerDay', 'totalDays', 'totalRooms', 'totalAmount', 'discount', 'totalAmountDue'));
    }
}
