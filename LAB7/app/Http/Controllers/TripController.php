<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Country;

class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::all();
        return view('trips.index', [
            'trips' => $trips,
            'randomTrips' => $trips->random(4),
        ]);
    }

    public function show($id)
    {
        return view('trips.show', [
            'trip' => Trip::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        $trip = Trip::findOrFail($id);
        $countries = Country::all();

        return view('trips.edit', compact('trip', 'countries'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'country_id' => 'required|exists:countries,id',
        ]);

        $trip = Trip::findOrFail($id);
        $trip->update($validated);

        return redirect()->route('trips.index')->with('success', 'Wycieczka zaktualizowana.');
    }
}
