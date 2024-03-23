<?php

namespace App\Http\Controllers;
use App\Models\State;

use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index()
    {
        $states = State::all();
        return view('states.index', compact('states'));
    }

    public function create()
    {
        return view('states.create');
    }

    public function store(Request $request)
    {
        State::create($request->all());
        return redirect()->route('states.index');
    }

    public function edit(State $state)
    {
        return view('states.edit', compact('state'));
    }

    public function update(Request $request, State $state)
    {
        $state->update($request->all());
        return redirect()->route('states.index');
    }

    public function destroy(State $state)
    {
        $state->delete();
        return redirect()->route('states.index');
    }
}
