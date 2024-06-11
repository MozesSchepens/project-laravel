<form method="POST" action="{{ route('profile.destroy') }}">
    @csrf
    <button type="submit">Delete Account</button>
</form>
