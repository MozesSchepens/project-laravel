@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Profile</h1>
    <form action="{{ route('profile.update', $profile->user_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="{{ $profile->username }}" required>
        </div>
        <div class="form-group">
            <label for="birthday">Birthday</label>
            <input type="date" name="birthday" id="birthday" value="{{ $profile->birthday }}">
        </div>
        <div class="form-group">
            <label for="about_me">About Me</label>
            <textarea name="about_me" id="about_me">{{ $profile->about_me }}</textarea>
        </div>
        <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="file" name="avatar" id="avatar">
        </div>
        <button type="submit">Save</button>
    </form>
</div>
@endsection
