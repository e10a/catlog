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
                        <ul>
                            <li>Add log for activities</li>
                        </ul>
                    </div>
                    <div>
                        @if ($pets->count())
                        <h2>Pets</h2>

                        <a class="button is-link is-small" href="/pets/create">Add a pet</a>
                        <a class="button is-link is-small" href="/pets">Manage pets</a>
                        <a class="button is-link is-small" href="/activity">Manage Activities</a>
                        @foreach ($pets as $pet)
                        <div>{{ $pet->name }}</div>
                        @endforeach
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
