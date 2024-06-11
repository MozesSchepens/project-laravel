@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="section-title">Shopping Cart</h1>
    @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if(count($cart) > 0)
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart as $item)
                        <tr>
                            <td><img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}" style="width: 100px;"></td>
                            <td>{{ $item['name'] }}</td>
                            <td>${{ $item['price'] }}</td>
                            <td>{{ $item['quantity'] }}</td>
                            <td>${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                            <td>
                                <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <form action="{{ route('cart.pay') }}" method="POST">
            @csrf
            <button type="submit" class="btn-pay">Pay</button>
        </form>
    @else
        <p>Your cart is empty.</p>
    @endif
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
    .table img {
        width: 100px;
    }
    .btn-pay {
        background-color: green;
        color: white;
        border-radius: 2px;
        padding: 10px;
        border: none;
    }
</style>
