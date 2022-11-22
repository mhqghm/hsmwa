<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();

        return view('cities.index', compact('cities'));
    }

    public function show($id)
    {
        $city = City::find($id);

        return view('cities.show', compact('city'));
    }

    public function create()
    {
        return view('cities.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:5|max:255',
            'population' => 'required|integer',
            'image_link' => 'required|url|min:5|max:255',
            'description' => 'required|string|min:5|max:255',
        ]);
        City::create($validated);

        return redirect()->route('cities.index');
    }

    public function edit($id)
    {
        $city = City::find($id);

        return view('cities.edit', compact('city'));
    }

    public function update($id, Request $request)
    {
        $city = City::find($id);

        $city->update([
            'name' => $request->name,
            'population' => $request->population,
            'image_link' => $request->image_link,
            'description' => $request->description,
        ]);

        return redirect()->route('cities.show', $city->id);
    }
}
