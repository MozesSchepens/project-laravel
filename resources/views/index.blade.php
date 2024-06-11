<!DOCTYPE html>
<html>
<head>
    <title>Producten</title>
</head>
<body>
    <h1>Producten</h1>
    <a href="{{ url('/products/create') }}">Nieuw Product</a>
    <ul>
        @foreach ($products as $product)
            <li>
                <a href="{{ url('/products', $product->id) }}">{{ $product->name }}</a>
                - {{ $product->price }}
                <a href="{{ url('/products/' . $product->id . '/edit') }}">Bewerk</a>
                <form action="{{ url('/products', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Verwijder</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
