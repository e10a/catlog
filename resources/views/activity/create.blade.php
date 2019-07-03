@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Activity</h1>
    <div class="box">
    <form method="POST" action="/activity">
        @csrf
        <div class="field">
            <div class="control">
                <input
                    type="text"
                    class="input {{ $errors->has('description') ? 'is-danger' : '' }}"
                    name="name"
                    placeholder="Activity name"
                    value="{{ old('name') }}"
                    required
                >
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Activity</button>
            </div>
        </div>
    </form>
    </div>
    @include ('errors')
</div>
@endsection
