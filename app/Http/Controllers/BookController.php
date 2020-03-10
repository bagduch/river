<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use App\Booking;

class BookController extends Controller
{
    //
    public $successStatus = 200;

    public function index()
    {
        $bookings = Booking::all();
        return response()->json(['success' => 'booking loaded', 'data' => $bookings], $this->successStatus);
    }

    public function store(Request $request)
    {

        $date = date('Y-m-d H:i:s', strtotime($request->date));
        $bookings = new Booking();
        $bookings->fill($request->only(['name', 'date', 'message']));
        if ($bookings->save()) {
            return response()->json(['success' => 'booking added', 'data' => $bookings], $this->successStatus);
        }
    }
}
