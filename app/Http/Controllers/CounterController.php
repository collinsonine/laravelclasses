<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CounterController extends Controller
{
    public $couter = 1;

    public function view(){
        return view('index', ['counter' => $this->couter]);
    }

    public function increment($counter){
        $count = $counter++;
        return response()->json([
            'counter' => $counter
        ], 200);
    }

    public function decrement($counter){
        $count = $counter--;
        return response()->json([
            'counter' => $counter
        ], 200);
    }
}
