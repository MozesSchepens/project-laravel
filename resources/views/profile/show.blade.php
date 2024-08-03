@extends('layouts.app')
<style>
    h2 {
        color: navy;
    }
</style>
@section('content')
<div class="container">
    <h1>Profile</h1>
    <div class="card">
        <div class="card-header">
            Profile Details
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('profile.updateProfileInformation') }}">
                @csrf
                <div class="form-section">
                    <h2>About You</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select id="gender" name="gender" class="form-control">
                                    <option value="male" {{ Auth::user()->gender == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ Auth::user()->gender == 'female' ? 'selected' : '' }}>Female</option>
                                    <option value="other" {{ Auth::user()->gender == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="preferred_language">Preferred Language</label>
                                <select id="preferred_language" name="preferred_language" class="form-control">
                                    <option value="english" {{ Auth::user()->preferred_language == 'english' ? 'selected' : '' }}>English</option>
                                    <option value="dutch" {{ Auth::user()->preferred_language == 'dutch' ? 'selected' : '' }}>Dutch</option>
                                    <option value="french" {{ Auth::user()->preferred_language == 'french' ? 'selected' : '' }}>French</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="favourite_player">Favourite Player</label>
                                <select id="favourite_player" name="favourite_player" class="form-control">
                                    <!-- Options here -->
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ethnicity">Ethnicity</label>
                                <select id="ethnicity" name="ethnicity" class="form-control">
                                    <option value="prefer_not_to_say" {{ Auth::user()->ethnicity == 'prefer_not_to_say' ? 'selected' : '' }}>Prefer not to say</option>
                                    <option value="asian" {{ Auth::user()->ethnicity == 'asian' ? 'selected' : '' }}>Asian</option>
                                    <option value="black" {{ Auth::user()->ethnicity == 'black' ? 'selected' : '' }}>Black</option>
                                    <option value="white" {{ Auth::user()->ethnicity == 'white' ? 'selected' : '' }}>White</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nickname">Nickname</label>
                                <input type="text" id="nickname" name="nickname" class="form-control" value="{{ Auth::user()->nickname }}">
                            </div>
                            <div class="form-group">
                                <label for="fan_since">Fan Since</label>
                                <input type="text" id="fan_since" name="fan_since" class="form-control" value="{{ Auth::user()->fan_since }}">
                            </div>
                            <div class="form-group">
                                <label for="lgbtq_community">LGBTQ Community</label>
                                <select id="lgbtq_community" name="lgbtq_community" class="form-control">
                                    <option value="yes" {{ Auth::user()->lgbtq_community == 'yes' ? 'selected' : '' }}>Yes</option>
                                    <option value="no" {{ Auth::user()->lgbtq_community == 'no' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h2>Address</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="country">Country</label>
                                <select id="country" name="country" class="form-control">
                                    <option value="belgium" {{ Auth::user()->country == 'belgium' ? 'selected' : '' }}>Belgium</option>
                                    <option value="netherlands" {{ Auth::user()->country == 'netherlands' ? 'selected' : '' }}>Netherlands</option>
                                    <option value="germany" {{ Auth::user()->country == 'germany' ? 'selected' : '' }}>Germany</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="address_line_1">Address Line 1</label>
                                <input type="text" id="address_line_1" name="address_line_1" class="form-control" value="{{ Auth::user()->address_line_1 }}">
                            </div>
                            <div class="form-group">
                                <label for="address_line_3">Address Line 3 (Optional)</label>
                                <input type="text" id="address_line_3" name="address_line_3" class="form-control" value="{{ Auth::user()->address_line_3 }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address_line_2">Address Line 2 (Optional)</label>
                                <input type="text" id="address_line_2" name="address_line_2" class="form-control" value="{{ Auth::user()->address_line_2 }}">
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" id="city" name="city" class="form-control" value="{{ Auth::user()->city }}">
                            </div>
                            <div class="form-group">
                                <label for="postcode">Post Code / ZIP Code</label>
                                <input type="text" id="postcode" name="postcode" class="form-control" value="{{ Auth::user()->postcode }}">
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
</div>
@endsection
