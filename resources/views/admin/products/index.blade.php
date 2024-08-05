@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manage Products</h1>
    <a href="{{ route('admin.product.create') }}" class="btn btn-primary mb-3">Add Product</a>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>${{ $product->price }}</td>
                    <td><img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" width="50"></td>
                    <td>
                        <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
