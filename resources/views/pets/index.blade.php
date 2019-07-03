@extends('layouts.app')

@section('content')
<div class="container">
<h1>Pets</h1>
<div>
    @if ($pets->count())
    @foreach ($pets as $pet)
    <div>{{ $pet->name }}</div>
    @endforeach
    @else
    <div>No one's home. Start by adding pets.</div>
    @endif
</div>
</div>
@endsection
