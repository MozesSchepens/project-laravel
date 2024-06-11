@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="section-title">Phil Foden named Premier League Player of the Season</h1>
    <div class="image-container">
        <img src="{{ asset('images/pots.png') }}" class="news-image" alt="Phil Foden">
    </div>
    <p>Phil Foden has been named the Premier League Player of the Season for his outstanding performances throughout the campaign...</p>
    <p>More details about the award and Foden's achievements...</p>
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
