<form method="POST" action="{{ route('profile.updatePassword') }}">
    @csrf
    <div>
        <label for="current_password">Current Password</label>
        <input type="password" name="current_password" required>
    </div>

    <div>
        <label for="password">New Password</label>
        <input type="password" name="password" required>
    </div>

    <div>
        <label for="password_confirmation">Confirm New Password</label>
        <input type="password" name="password_confirmation" required>
    </div>

    <button type="submit">Update Password</button>
</form>
