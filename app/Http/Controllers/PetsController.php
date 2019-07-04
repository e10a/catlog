<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;

class PetsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $pets = Pet::all();
        // $pets = Pet::where('owner_id', auth()->id())->get();
        $pets = auth()->user()->pets;
        return view('pets.index', compact('pets'));
    }

    public function create()
    {
        return view('pets.create');
    }

    public function store()
    {
        $attributes = $this->validatePet();
        $attributes['owner_id'] = auth()->id();
        Pet::create($attributes);
        flash('Pet ' . $attributes['name'] . ' has been created') ;
        return redirect('/pets');
    }

    public function show(Pet $pet)
    {
        $this->authorize('update', $pet);
        return view('pets.show', compact('pet'));
    }

    public function edit(Pet $pet)
    {
        $this->authorize('update', $pet);
        return view('pets.edit', compact('pet'));
    }

    public function update(Pet $pet)
    {
        // $attributes = request()->validate(['name' => 'required']);
        // $pet->update($attributes);
        $pet->update($this->validatePet());
        return redirect('/pets');
    }

    public function destroy(Pet $pet)
    {
        $pet->delete();
        return redirect('/pets');
    }

    protected function validatePet()
    {
        return request()->validate([
            'name' => 'required'
        ]);
    }
}
