@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="section-title">Club</h1>
    <hr>
    <div class="news-grid">
        <a href="{{ url('/club/history') }}" class="news-item">
            <img src="{{ asset('images/history.png') }}" alt="News 1" class="img-fluid">
            <div class="news-info">
                <span class="news-time">Our History</span>
                <span class="news-type">Club</span>
                <h2 class="news-title">Club records &rarr;</h2>
            </div>
        </a>
        <a href="{{ url('/club/stadium') }}" class="news-item">
            <img src="{{ asset('images/tour.png') }}" alt="News 2" class="img-fluid">
            <div class="news-info">
                <span class="news-time">Visiting & tours</span>
                <span class="news-type">Tourism</span>
                <h2 class="news-title">Visiting the The Etihad Stadium &rarr;</h2>
            </div>
        </a>
        <a href="{{ url('/club/partners') }}" class="news-item">
            <img src="{{ asset('images/etihad.png') }}" alt="News 3" class="img-fluid">
            <div class="news-info">
                <span class="news-time">Our partners</span>
                <span class="news-type">Partners</span>
                <h2 class="news-title">Global partners &rarr;</h2>
            </div>
        </a>
    </div>
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
    .news-grid {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
    }
    .news-item {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        overflow: hidden;
        width: 30%;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-decoration: none;
        color: inherit;
        display: block;
    }
    .news-item img {
        width: 100%;
        height: auto;
    }
    .news-info {
        padding: 15px;
    }
    .news-time {
        display: block;
        color: #888;
        font-size: 0.8rem;
        margin-bottom: 5px;
    }
    .news-type {
        display: block;
        color: #003566;
        font-weight: bold;
        font-size: 0.9rem;
        margin-bottom: 10px;
    }
    .news-title {
        font-size: 1.1rem;
        color: #000;
    }
    .news-title:hover {
        text-decoration: underline;
    }
</style>
