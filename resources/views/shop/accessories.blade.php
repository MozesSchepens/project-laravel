@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="section-title">Accessories</h1>
    <p>Find the perfect accessories to complement your gear.</p>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{ asset('images/scarf.png') }}" class="card-img-top" alt="Scarf">
                <div class="card-body">
                    <h5 class="card-title">Scarf and hat</h5>
                    <p class="card-text">$9.99</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="scarf">
                        <input type="hidden" name="name" value="Scarf">
                        <input type="hidden" name="price" value="9.99">
                        <input type="hidden" name="image" value="images/scarf.jpg">
                        <input type="number" name="quantity" value="1" min="1" class="form-control mb-2">
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{ asset('images/gloves.png') }}" class="card-img-top" alt="Gloves">
                <div class="card-body">
                    <h5 class="card-title">Gloves</h5>
                    <p class="card-text">$4.99</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="gloves">
                        <input type="hidden" name="name" value="Gloves">
                        <input type="hidden" name="price" value="4.99">
                        <input type="hidden" name="image" value="images/gloves.png">
                        <input type="number" name="quantity" value="1" min="1" class="form-control mb-2">
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{ asset('images/sheet.png') }}" class="card-img-top" alt="Sheet">
                <div class="card-body">
                    <h5 class="card-title">Sheets</h5>
                    <p class="card-text">$29.99</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="sheet">
                        <input type="hidden" name="name" value="Sheet">
                        <input type="hidden" name="price" value="29.99">
                        <input type="hidden" name="image" value="images/sheet.png">
                        <input type="number" name="quantity" value="1" min="1" class="form-control mb-2">
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
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
    .card-img-top {
        height: 300px;
        object-fit: cover;
    }
    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
        color: #003566;
    }
    .card-text {
        font-size: 1rem;
        color: #000;
    }
    .btn-primary {
        background-color: #003566;
        border: none;
    }
    .btn-primary:hover {
        background-color: #00509e;
    }
</style>
