<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display the profile of the authenticated user.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function show()
    {
        return view('profile.profile');
    }

    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit()
    {
        return view('profile.edit');
    }

    /**
     * Update the profile information of the authenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateProfileInformation(Request $request)
    {
        $request->validate([
            'gender' => 'nullable|string',
            'ethnicity' => 'nullable|string',
            'preferred_language' => 'nullable|string',
            'nickname' => 'nullable|string',
            'fan_since' => 'nullable|string',
            'favourite_player' => 'nullable|string',
            'country' => 'nullable|string',
            'address_line_1' => 'nullable|string',
            'address_line_2' => 'nullable|string',
            'address_line_3' => 'nullable|string',
            'city' => 'nullable|string',
            'postcode' => 'nullable|string',
        ]);

        $user = Auth::user();
        $user->update($request->only([
            'gender',
            'ethnicity',
            'preferred_language',
            'nickname',
            'fan_since',
            'favourite_player',
            'country',
            'address_line_1',
            'address_line_2',
            'address_line_3',
            'city',
            'postcode'
        ]));

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
    }
}
