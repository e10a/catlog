<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::all();
        return view('activity.index', compact('activities'));
    }

    public function create()
    {
        return view('activity.create');
    }

    public function store()
    {
        $attributes = request()->validate(['name' => 'required']);
        Activity::create($attributes);
        return redirect('/activity');
    }
}
