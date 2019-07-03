@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pet</h1>
    <div class="box">
    <form method="POST" action="/pets/{{ $pet->id }}">
        @method("PATCH")
        @csrf
        <div class="field">
            <div class="control">
                <input
                    type="text"
                    class="input {{ $errors->has('description') ? 'is-danger' : '' }}"
                    name="name"
                    placeholder="Pet name"
                    value="{{ $pet->name }}"
                    required
                >
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Edit Pet</button>
            </div>
        </div>
    </form>
    </div>
    @include ('errors')
</div>
@endsection
