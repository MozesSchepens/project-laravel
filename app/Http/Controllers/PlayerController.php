<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the players.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Hier kun je de logica toevoegen om spelers op te halen
        return view('players');
    }
}
