@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="section-title">{{ $news->title }}</h1>
    <div class="image-container">
        <img src="{{ asset('images/' . $news->image) }}" class="news-image" alt="{{ $news->title }}">
    </div>
    <p>Published on: {{ $news->published_at->format('F j, Y') }}</p>
    <p>{{ $news->content }}</p>
</div>
@endsection

<style>
    .section-title {
        font-size: 2rem;
        font-weight: bold;
        color: #003566;
        margin-bottom: 20px;
        text-transform: uppercase;
    }
    .image-container {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }
    .news-image {
        width: 50%; 
        height: auto;
    }
</style>
