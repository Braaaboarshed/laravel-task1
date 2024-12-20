@extends('layout')

@section('title', 'Create Post')

@section('content')
<h1>Create New Post</h1>
<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
    </div>
    <div class="mb-3">
        <label for="images" class="form-label">Images</label>
        <input type="file" class="form-control" id="images" name="images[]" multiple>
    </div>
    <button type="submit" class="btn btn-success">Save Post</button>
</form>

@endsection
