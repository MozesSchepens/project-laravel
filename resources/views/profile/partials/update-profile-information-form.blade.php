<form method="POST" action="{{ route('profile.updateProfileInformation') }}">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ Auth::user()->name }}" required>
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" value="{{ Auth::user()->email }}" required>
    </div>

    <button type="submit">Update Profile</button>
</form>
