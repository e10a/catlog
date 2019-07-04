<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;
use App\Mail\PetCreated;

class PetsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $pets = Pet::all();
        $pets = Pet::where('owner_id', auth()->id())->get();
        return view('pets.index', compact('pets'));
    }

    public function create()
    {
        return view('pets.create');
    }

    public function store()
    {
        $attributes = request()->validate(['name' => 'required']);
        $attributes['owner_id'] = auth()->id();
        $pet = Pet::create($attributes);

        \Mail::to('ellenshimada@gmail.com')->send(
            new PetCreated($pet)
        );

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
}
