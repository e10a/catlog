@extends('layouts.app')

@section('title', 'Pet - ' . $pet->name)

@section('content')
<div class="container">
    <h1 class="title">{{ $pet->name }}</h1>
    <p>
        <a href="/pets/{{ $pet->id }}/edit">Edit</a>
    </p>
</div>
@endsection
