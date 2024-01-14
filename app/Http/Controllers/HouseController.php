<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;

class HouseController extends Controller
{
    public function index() {
        $houses = House::all();
        return view('houses.index', ['houses' => $houses]);
    }
    public function create() {
        return view('houses.create');
    }
    public function store(Request $request) {
        $data = $request->validate([
            'titel' => 'required',
            'oppervlakte' => 'required',
            'prijs' => 'required',
            'beschrijving' => 'required'
        ]);
        $newHouse = House::create($data);

        return redirect(route('houses.index'));
    }
    public function edit(House $house) {
        return view('houses.edit', ['house' => $house]);
    }
    public function update(House $house, Request $request) {
        $data = $request->validate([
            'titel' => 'required',
            'oppervlakte' => 'required',
            'prijs' => 'required',
            'beschrijving' => 'required'
        ]);

        $house->update($data);

        return redirect(route('houses.index'));
    }
    public function delete(House $house){
        $house->delete();

        return redirect(route('houses.index'));
    }
    public function show(House $house)
    {
        return view('houses.show', compact('house'));
    }
    

}
