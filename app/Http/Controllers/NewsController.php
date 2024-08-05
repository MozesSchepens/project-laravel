<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $newsItem = News::findOrFail($id);
        return view('news.show', compact('newsItem'));
    }

    public function pots()
    {
        $newsItem = News::where('title', 'Phil Foden named Premier League Player of the Season')->firstOrFail();
        return view('news.pots', compact('newsItem'));
    }

    public function stadium()
    {
        $newsItem = News::where('title', 'Manchester City announces new stadium expansion')->firstOrFail();
        return view('news.stadium', compact('newsItem'));
    }
}
