<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return view('admin.players.index', compact('players'));
    }

    public function create()
    {
        return view('admin.players.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        Player::create([
            'name' => $request->name,
            'position' => $request->position,
            'image' => $imageName,
        ]);

        return redirect()->route('admin.players.index')
                        ->with('success','Player created successfully.');
    }

    public function edit(Player $player)
    {
        return view('admin.players.edit', compact('player'));
    }

    public function update(Request $request, Player $player)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
            $player->image = $imageName;
        }

        $player->name = $request->name;
        $player->position = $request->position;
        $player->save();

        return redirect()->route('admin.players.index')
                        ->with('success','Player updated successfully');
    }

    public function destroy(Player $player)
    {
        $player->delete();
        return redirect()->route('admin.players.index')
                        ->with('success','Player deleted successfully');
    }
}
