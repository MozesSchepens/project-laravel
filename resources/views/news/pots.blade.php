@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="section-title">{{ $newsItem->title }}</h1>
    <div class="image-container">
        <img src="{{ asset('images/' . $newsItem->image) }}" class="news-image" alt="{{ $newsItem->title }}">
    </div>
    <p>{{ $newsItem->content }}</p>
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
