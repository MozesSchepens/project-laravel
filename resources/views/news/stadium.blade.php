@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="section-title">Manchester City announces new stadium expansion</h1>
    <div class="image-container">
        <img src="{{ asset('images/etihad.png') }}" class="news-image" alt="expansion">
    </div>
    <p>Manchester City has announced plans to expand the Etihad Stadium...</p>
    <p>More details about the expansion and what it means for the club...</p>
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
