<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class LogicController extends Controller
{
    public function view(){
        return view('index');
    }

    public function newreservation(){
        return view('newreservation');
    }

    public function reserve(Request $request){
        $reservation = new Reservation;
        $reservation->title = $request->title;
        $reservation->firstname = $request->firstname;
        $reservation->lastname = $request->lastname;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->date = $request->date;
        $reservation->adult = $request->adult;
        $reservation->children = $request->children;
        $reservation->save();

        return redirect()->route('index')->with('success', 'Reservation Created Successfully');
    }

    public function allreservations(){
        $reservations = Reservation::all();
        return view('reservations', ['reservations' => $reservations]);
    }
}
