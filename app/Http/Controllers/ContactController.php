<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:500',
            'email' => 'required|email',
        ]);


        return back()->with('success', 'Thank you for contacting us!');
    }
}
