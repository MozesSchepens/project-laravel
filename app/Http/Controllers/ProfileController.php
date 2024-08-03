<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('profile.show', Auth::id())->with('error', 'The requested user does not exist.');
        }

        $profile = Profile::firstOrCreate(
            ['user_id' => $id],
            [
                'username' => $user->name,
                'about_me' => 'Tell us about yourself',
                'avatar' => null
            ]
        );

        return view('profile.show', compact('profile'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('profile.show', Auth::id())->with('error', 'The requested user does not exist.');
        }

        $profile = Profile::firstOrCreate(
            ['user_id' => $id],
            [
                'username' => $user->name,
                'about_me' => 'Tell us about yourself',
                'avatar' => null
            ]
        );

        return view('profile.edit', compact('profile'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'username' => 'required|string|max:255|unique:profiles,username,' . $id . ',user_id',
        'birthday' => 'nullable|date',
        'about_me' => 'nullable|string',
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $profile = Profile::where('user_id', $id)->first();
    dd($profile); // Debugging line to ensure profile is correctly loaded

    if (!$profile) {
        return redirect()->route('profile.edit', $id)->with('error', 'Profile not found.');
    }

    if ($request->hasFile('avatar')) {
        $path = $request->file('avatar')->store('avatars', 'public');
        $profile->avatar = $path;
    }

    $profile->username = $request->username;
    $profile->birthday = $request->birthday;
    $profile->about_me = $request->about_me;
    $profile->save();

    return redirect()->route('profile.show', $id)->with('success', 'Profile updated successfully!');
}
    public function updateProfileInformation(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('profile.show', $user->id)->with('success', 'Profile updated successfully!');
    }
}
