@extends('layouts.app')

@section('content')
<style>
    h1 {
        color: lightblue;
        font-size: 72px;
    }
    h2, h3 {
        color: navy;
    }
    p {
        color: #001838;
    }
    .content img {
        padding: 5px;
        display: block;
        margin: 0 auto;
        width: 50%;
    }
    .section-title {
        font-size: 2rem;
        font-weight: bold;
        color: #003566;
        margin-bottom: 20px;
        text-transform: uppercase;
    }
    .btn-edit, .btn-delete {
        margin-top: 10px;
    }
</style>

<div class="container">
    <h1>{{ $newsItem->title }}</h1>
    <img src="{{ asset('images/vinnie.png' . $newsItem->image) }}" alt="{{ $newsItem->title }}" class="img-fluid">
    <span class="news-date">Published on: {{ $newsItem->published_at->format('F j, Y') }}</span>
    <p>{{ $newsItem->content }}</p>
    
    @if(Auth::check() && Auth::user()->is_admin)
        <a href="{{ route('admin.news.edit', $newsItem->id) }}" class="btn btn-warning btn-edit">Edit</a>
        <form action="{{ route('admin.news.destroy', $newsItem->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-delete">Delete</button>
        </form>
    @endif
</div>
@endsection
