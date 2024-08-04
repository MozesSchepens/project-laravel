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

        if (!$profile) {
            return redirect()->route('profile.edit', $id)->with('error', 'Profile not found.');
        }

        $updateData = [
            'username' => $request->username,
            'birthday' => $request->birthday,
            'about_me' => $request->about_me,
        ];

        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars', 'public');
            $updateData['avatar'] = $path;
        }

        // Update the profile without using the save method
        Profile::where('user_id', $id)->update($updateData);

        return redirect()->route('profile.show', $id)->with('success', 'Profile updated successfully!');
    }

    public function updateProfileInformation(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $updateData = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        // Update the user without using the save method
        User::where('id', $user->id)->update($updateData);

        return redirect()->route('profile.show', $user->id)->with('success', 'Profile updated successfully!');
    }
}
