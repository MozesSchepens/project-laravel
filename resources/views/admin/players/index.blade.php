@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="section-title">Players</h1>
    <a href="{{ route('admin.players.create') }}" class="btn btn-primary mb-3">Add Player</a>
    <div class="row">
        @foreach($players as $player)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{ asset('images/' . $player->image) }}" class="card-img-top" alt="{{ $player->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $player->name }}</h5>
                    <p class="card-text">{{ $player->position }}</p>
                    <a href="{{ route('admin.players.edit', $player->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.players.destroy', $player->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
