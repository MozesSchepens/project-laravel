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
                'username' => Auth::user()->name,
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
                'username' => Auth::user()->name,
                'about_me' => 'Tell us about yourself',
                'avatar' => null
            ]
        );

        return view('profile.edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:users,name,' . $id,
            'birthday' => 'nullable|date',
            'about_me' => 'nullable|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $profile = Profile::where('user_id', $id)->firstOrFail();

        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars', 'public');
            $profile->avatar = $path;
        }

        $profile->update([
            'username' => $request->username,
            'birthday' => $request->birthday,
            'about_me' => $request->about_me,
            'avatar' => $profile->avatar
        ]);

        return redirect()->route('profile.show', $id)->with('success', 'Profile updated successfully!');
    }
}
