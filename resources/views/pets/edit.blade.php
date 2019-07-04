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
                    class="input {{ $errors->has('name') ? 'is-danger' : '' }}"
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
    <form method="POST" action="/pets/{{ $pet->id }}">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button type="submit" class="button" style="margin-top: 1em;">Delete Pet</button>
    </form>
    </div>
    @include ('errors')
</div>
@endsection
