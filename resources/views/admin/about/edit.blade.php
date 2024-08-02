@extends('layouts.admin')

@section('content')
<style>
     body {
        font-family: Arial, sans-serif;
        background-color: white;
        overflow-x: hidden;
    }
    .aboutcontent{
        width: 80%;
        justify-content: space-around;
    }
    h1{
        color: #001838;
    }
    strong, h5{
        color: navy;
    }
    p{
        color: #001838;
    }
    
</style>
<body>
    <div class="container">
        <h1>Project beschrijving</h1>
        <hr>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('admin.about.update') }}" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="content" rows="10" class="form-control">{{ old('content', $content) }}</textarea>
                @error('content')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
        <footer>
            <p>&copy; 2024 Mozes Schepens. All rights reserved.</p>
        </footer>
    </div>
</body>
@endsection
