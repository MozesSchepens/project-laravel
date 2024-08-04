@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manage News</h1>
    <a href="{{ route('admin.news.create') }}" class="btn btn-primary">Add News</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($news as $newsItem)
                <tr>
                    <td>{{ $newsItem->title }}</td>
                    <td>
                        <a href="{{ route('admin.news.edit', $newsItem->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.news.destroy', $newsItem->id) }}" method="POST" style="display:inline-block;">
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
