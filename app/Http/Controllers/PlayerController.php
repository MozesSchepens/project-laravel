<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();
        $manager = Player::where('position', 'Manager')->first();
        
        return view('players.index', compact('players', 'manager'));
    }
}

