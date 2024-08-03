@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Profile</h1>
    <div class="card">
        <div class="card-header">
            Profile Details
        </div>
        <div class="card-body">
            <p><strong>Username:</strong> {{ $profile->username }}</p>
            <p><strong>Birthday:</strong> {{ $profile->birthday }}</p>
            <p><strong>About Me:</strong> {{ $profile->about_me }}</p>
            @if ($profile->avatar)
                <p><strong>Avatar:</strong></p>
                <img src="{{ asset('storage/' . $profile->avatar) }}" alt="Avatar" style="max-width: 100px;">
            @endif
            <a href="{{ route('profile.edit', $profile->user_id) }}" class="btn btn-primary">Edit Profile</a>
        </div>
    </div>
</div>
@endsection
