@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <div class="row">
        <!-- Manage News -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manage News</h5>
                    <p class="card-text">Create, edit, and delete news items.</p>
                    <a href="{{ route('admin.news.index') }}" class="btn btn-primary">Go to News</a>
                </div>
            </div>
        </div>
        <!-- Manage FAQ -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manage FAQ</h5>
                    <p class="card-text">Manage frequently asked questions.</p>
                    <a href="{{ route('admin.faq.index') }}" class="btn btn-primary">Go to FAQ</a>
                </div>
            </div>
        </div>
        <!-- Manage Contacts -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manage Contacts</h5>
                    <p class="card-text">View, delete and respond to contact inquiries.</p>
                    <a href="{{ route('admin.contact.index') }}" class="btn btn-primary">Go to Contacts</a>
                </div>
            </div>
        </div>
        
        <!-- Manage Forum Posts -->
        <div class="col-md-3 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manage Forum Posts</h5>
                    <p class="card-text">Edit, delete, and manage forum posts and replies.</p>
                    <a href="{{ route('admin.forum.index') }}" class="btn btn-primary">Go to Forum Posts</a>
                </div>
            </div>
        </div>

        <!-- Manage Users Posts -->
        <div class="col-md-3 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manage Users</h5>
                    <p class="card-text">Create, edit, delete, and manage users.</p>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-primary mb-3">Go to Users</a>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection