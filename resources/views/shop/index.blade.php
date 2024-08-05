@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="section-title">Shop</h1>
    <p>Explore our wide range of products and merchandise. Find the perfect gear to show your support for Manchester City!</p>
    <hr>
    <h2 class="sub-section-title">Categories</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{ asset('images/kits.png') }}" class="card-img-top" alt="Jerseys">
                <div class="card-body">
                    <h5 class="card-title">Jerseys</h5>
                    <p class="card-text">Official Manchester City jerseys for the season.</p>
                    <a href="{{ url('/shop/jerseys') }}" class="btn btn-primary custom-btn">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{ asset('images/scarf.png') }}" class="card-img-top" alt="Accessories">
                <div class="card-body">
                    <h5 class="card-title">Accessories</h5>
                    <p class="card-text">Find the perfect accessories to complement your gear.</p>
                    <a href="{{ url('/shop/accessories') }}" class="btn btn-primary custom-btn">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{ asset('images/ball.png') }}" class="card-img-top" alt="Equipment">
                <div class="card-body">
                    <h5 class="card-title">Equipment</h5>
                    <p class="card-text">Top-notch equipment for training and match day.</p>
                    <a href="{{ url('/shop/equipment') }}" class="btn btn-primary custom-btn">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <h2 class="sub-section-title">Featured Products</h2>
    @if(Auth::check() && Auth::user()->is_admin)
    <a href="{{ route('shop.create') }}" class="btn btn-primary mb-3">Add Product</a>
    @endif
    <div class="row">
        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <img src="{{ asset('images/gloves.png') }}" class="card-img-top" alt="Gloves">
                <div class="card-body">
                    <h5 class="card-title">Gloves</h5>
                    <p class="card-text">$4.99</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="1">
                        <input type="hidden" name="name" value="Gloves">
                        <input type="hidden" name="price" value="4.99">
                        <input type="hidden" name="image" value="{{ asset('images/gloves.png') }}">
                        <input type="number" name="quantity" value="1" min="1" class="form-control mb-2">
                        <button type="submit" class="btn btn-primary custom-btn">Add to Cart</button>
                    </form>
                    @if(Auth::check() && Auth::user()->is_admin)
                    <a href="{{ route('shop.edit', 1) }}" class="btn btn-warning mt-2">Edit</a>
                    <form action="{{ route('shop.destroy', 1) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mt-2">Delete</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <img src="{{ asset('images/sports_bag.png') }}" class="card-img-top" alt="Sports bag">
                <div class="card-body">
                    <h5 class="card-title">Sports bag</h5>
                    <p class="card-text">$45.00</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="2">
                        <input type="hidden" name="name" value="Sports bag">
                        <input type="hidden" name="price" value="45.00">
                        <input type="hidden" name="image" value="{{ asset('images/sports_bag.png') }}">
                        <input type="number" name="quantity" value="1" min="1" class="form-control mb-2">
                        <button type="submit" class="btn btn-primary custom-btn">Add to Cart</button>
                    </form>
                    @if(Auth::check() && Auth::user()->is_admin)
                    <a href="{{ route('shop.edit', 2) }}" class="btn btn-warning mt-2">Edit</a>
                    <form action="{{ route('shop.destroy', 2) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mt-2">Delete</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <img src="{{ asset('images/third_jersey.png') }}" class="card-img-top" alt="Third Jersey">
                <div class="card-body">
                    <h5 class="card-title">Third Jersey</h5>
                    <p class="card-text">$79.99</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="3">
                        <input type="hidden" name="name" value="Third Jersey">
                        <input type="hidden" name="price" value="79.99">
                        <input type="hidden" name="image" value="{{ asset('images/third_jersey.png') }}">
                        <input type="number" name="quantity" value="1" min="1" class="form-control mb-2">
                        <button type="submit" class="btn btn-primary custom-btn">Add to Cart</button>
                    </form>
                    @if(Auth::check() && Auth::user()->is_admin)
                    <a href="{{ route('shop.edit', 3) }}" class="btn btn-warning mt-2">Edit</a>
                    <form action="{{ route('shop.destroy', 3) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mt-2">Delete</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <img src="{{ asset('images/sheet.png') }}" class="card-img-top" alt="Sheets">
                <div class="card-body">
                    <h5 class="card-title">Sheets</h5>
                    <p class="card-text">$29.99</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="4">
                        <input type="hidden" name="name" value="Sheets">
                        <input type="hidden" name="price" value="29.99">
                        <input type="hidden" name="image" value="{{ asset('images/sheet.png') }}">
                        <input type="number" name="quantity" value="1" min="1" class="form-control mb-2">
                        <button type="submit" class="btn btn-primary custom-btn">Add to Cart</button>
                    </form>
                    @if(Auth::check() && Auth::user()->is_admin)
                    <a href="{{ route('shop.edit', 4) }}" class="btn btn-warning mt-2">Edit</a>
                    <form action="{{ route('shop.destroy', 4) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mt-2">Delete</button>
                    </form>
                    @endif
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
    .sub-section-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #003566;
        margin-bottom: 15px;
        text-transform: uppercase;
    }
    .card-img-top {
        height: 200px;
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
    .btn-primary.custom-btn {
        background-color: #003566;
        border-color: #003566;
    }
    .btn-primary.custom-btn:hover {
        background-color: #00509e;
        border-color: #00509e;
    }
</style>
