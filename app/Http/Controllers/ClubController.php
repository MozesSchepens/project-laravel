<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClubController extends Controller
{ public function index()
    {
        return view('club');
    }
    public function history()
    {
        return view('club.history');
    }

    public function stadium()
    {
        return view('club.stadium');
    }

    public function partners()
    {
        return view('club.partners');
    }
}
