@extends('layouts.app')

@section('content')
<div class="container">
<h1>Activities</h1>
<div>
    @if ($activities->count())
    @foreach ($activities as $item)
    <div>{{ $item->name }}</div>
    @endforeach
    @else
    <div>It's quiet here. Start by adding activities.</div>
    @endif
</div>
</div>
@endsection
