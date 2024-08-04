<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'published_at' => 'required|date',
        ]);

        $imagePath = $request->file('image')->store('news_images', 'public');

        News::create([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'image' => $imagePath,
            'published_at' => $validatedData['published_at'],
        ]);

        return redirect()->route('admin.news.index')->with('success', 'News created successfully.');
    }

    // andere methodes zoals edit, update, destroy...
}
