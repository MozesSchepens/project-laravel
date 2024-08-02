<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function edit()
    {
        // Haal de huidige inhoud op om te bewerken (bijvoorbeeld uit de database)
        // Voor deze demo, gaan we er van uit dat de inhoud hard gecodeerd is
        $content = 'Huidige inhoud van de about pagina';
        
        return view('admin.about.edit', compact('content'));
    }

    public function update(Request $request)
    {
        // Valideer het verzoek
        $request->validate([
            'content' => 'required|string',
        ]);

        // Sla de nieuwe inhoud op (bijvoorbeeld in de database)
        // Voor deze demo, gaan we er van uit dat we het gewoon weergeven
        $content = $request->input('content');
        
        // Redirect terug met een succesbericht
        return redirect()->route('admin.about.edit')->with('success', 'Inhoud succesvol bijgewerkt!');
    }
}
