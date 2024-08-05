@extends('layouts.app')

@section('content')
<div class="container">
    <h1>All News</h1>
    @if(Auth::check() && Auth::user()->is_admin)
    <a href="{{ route('admin.news.create') }}" class="btn btn-primary mb-3">Add News</a>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Published At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $newsItem)
            <tr>
                <td>{{ $newsItem->title }}</td>
                <td>{{ $newsItem->published_at->format('F j, Y') }}</td>
                <td>
                    <a href="{{ route('admin.news.edit', $newsItem->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.news.destroy', $newsItem->id) }}" method="POST" style="display:inline;">
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
@endsection
