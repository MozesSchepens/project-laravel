@extends('layouts.app')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: white;
        overflow-x: hidden;
    }

    .container {
        width: 400px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 80vh;
    }

    .centered {
        text-align: center;
        color: black;
    }

    .message {
        color: black;
        width: 100%;
        height: 300px;
        border: 1px solid black;
        border-radius: 5px;
        padding: 10px;
        margin: 10px 0;
        resize: none;
    }

    .infoEmail {
        color: black;
        padding-bottom: 10px;
    }

    .userEmail {
        width: 100%;
        padding: 8px;
        color: black;
        border: 1px solid black;
        border-radius: 5px;
    }

    button {
        width: 100%;
        padding: 10px 20px;
        background-color: navy;
        color: white;
        margin-top: 24px;
        border-radius: 10px;
        border: 2px solid black;
        cursor: pointer;
    }

    button:hover {
        background-color: darkblue;
    }

    button:active {
        background-color: navy;
    }
</style>
<div class="container">
    <section class="centered">
        <p>Any questions? Feel free to ask us!</p>
        <p>We try to answer as soon as we can</p>
        <form id="support-form">
            <textarea class="message" id="message" rows="10" cols="30"></textarea>
        </form>
    </section>
    <p class="infoEmail">leave the email you prefer to be answered on down here</p>
    <input type="email" class="userEmail">
    <button type="submit">Send</button>
</div>
@endsection
