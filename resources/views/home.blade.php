@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! <br>
                    <hr><br>
                    <div>
                        <h2>To Do</h2>
                        <ul>
                            <li>Add log for activities</li>
                            <li>A proper welcome page</li>
                        </ul>
                    </div>
                    <div>
                        @if ($pets->count())
                        <h2>Pets</h2>
                        <a class="button is-link is-small" href="/pets/create">Add a pet</a>
                        <a class="button is-link is-small" href="/pets">Manage pets</a>
                        <a class="button is-link is-small" href="/activity">Manage Activities</a>
                        @foreach ($pets as $pet)
                        <div><a href="/pets/{{ $pet->id }}" >{{ $pet->name }}</a> <a href="/pets/{{ $pet->id }}/edit" >Edit</a></div>
                        @endforeach
                        @else
                        <div>No furry friends here, start by <a href="/pets/create">adding</a> one.</div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
