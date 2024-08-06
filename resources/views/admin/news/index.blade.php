@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="section-title">Manage News</h1>
    <a href="{{ route('admin.news.create') }}" class="btn btn-primary mb-3">Add News</a>
    <div class="news-grid">
        @foreach($news as $newsItem)
        <div class="news-item">
            <img src="{{ asset('storage/' . $newsItem->image) }}" alt="{{ $newsItem->title }}" class="img-fluid">
            <span class="news-date">Published on: {{ $newsItem->published_at->format('F j, Y') }}</span>
            <div class="news-info">
                <h2 class="news-title">{{ $newsItem->title }}</h2>
                <p>{{ Str::limit($newsItem->content, 100) }}</p>
                <a href="{{ route('news.show', $newsItem->id) }}" class="btn btn-primary">Read more</a>
                <a href="{{ route('admin.news.edit', $newsItem->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('admin.news.destroy', $newsItem->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
