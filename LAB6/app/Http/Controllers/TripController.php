<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index(){
        // $trips = Trip::all();
        // $trips = Trip::take(4)->get();
        $trips = Trip::inRandomOrder()->take(4)->get();
        return view('trips.index', ['trips' => $trips]);
    }

    public function show($id){
        $trip = Trip::findOrFail($id);
        return view('trips.show', ['trip' => $trip]);
    }
}
