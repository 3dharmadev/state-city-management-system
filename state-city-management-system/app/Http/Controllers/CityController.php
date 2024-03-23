<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\State;



class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('cities.index', compact('cities'));
    }

    public function create()
    {
        $states = State::all(); 
        return view('cities.create', compact('states'));
    }

    public function store(Request $request)
    {
        City::create($request->all());
        return redirect()->route('cities.index');
    }

    public function edit(City $city)
    {
        return view('cities.edit', compact('city'));
    }

    public function update(Request $request, City $city)
    {
        $city->update($request->all());
        return redirect()->route('cities.index');
    }

    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('cities.index');
    }
}
