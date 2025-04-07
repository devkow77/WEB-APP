<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use Exception;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::all();
        return view('countries.index', ['countries' => $countries]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('countries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCountryRequest $request)
    {
        $validated = $request->validated();
        Country::create($validated);

        return redirect()->route('countries.index')->with('success', 'Kraj został dodany!'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        return view('countries.show', ['country' => $country]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country)
    {
        return view('countries.edit', ['country' => $country]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCountryRequest $request, Country $country)
    {
        $country->update($request->validated());

         return redirect()->route('countries.index')->with('success', 'Kraj został zaktualizowany!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        try{
            $country->delete();
            return redirect()->route('countries.index')->with('success', 'kraj zostal usuniety');
        } catch(Exception $e){
            report($e);
            return redirect()->route('countries.index')->with('error', 'Nie udalo sie usunac kraju');
        }
    }
}
