<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;

class PetsController extends Controller
{
    public function index()
    {
        $pets = Pet::all();
        return view('pets.index', compact('pets'));
    }

    public function create()
    {
        return view('pets.create');
    }

    public function store()
    {
        $attributes = request()->validate(['name' => 'required']);
        Pet::create($attributes);
        return redirect('/pets');
    }
}
