@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('message'))
    <div class="notification is-primary">
        <button class="delete"></button>
        <div>{{ session('message') }}</div>
    </div>
    @endif
<h1>Pets</h1>
<div>
    @if ($pets->count())
    @foreach ($pets as $pet)
    <div>{{ $pet->name }}</div>
    @endforeach
    @else
    <div>No one's home. Start by <a href="/pets/create">adding</a> pets.</div>
    @endif
</div>
</div>
@endsection
