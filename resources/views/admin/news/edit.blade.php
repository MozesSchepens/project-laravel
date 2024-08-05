@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="section-title">Edit News</h1>
    <form action="{{ route('admin.news.update', $newsItem->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $newsItem->title }}" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" rows="5" required>{{ $newsItem->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control-file">
            <img src="{{ asset('images/' . $newsItem->image) }}" class="img-thumbnail mt-2" width="150">
        </div>
        <button type="submit" class="btn btn-primary">Update News</button>
    </form>
</div>
@endsection
