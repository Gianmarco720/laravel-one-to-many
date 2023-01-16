@extends('layouts.admin')

@section('content')

<h1>Edit A Project</h1>

@include('partials.error-any')

<form action="{{route('admin.projects.update', $project->slug)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="My New Project" aria-describedby="titleHelper" value="{{old($project->title)}}">
        <small id="titleHelper" class="text-muted">Add a title for your new project, max 100 characters, must be unique</small>
    </div>

    <div class="mb-3 d-flex gap-4">
        <img width="130" src="{{asset('storage/' . $project->cover_image)}}" alt="">
        <label for="cover_image" class="form-label">Replace cover image</label>
        <input type="file" name="cover_image" id="cover_image" class="form-control @error('cover_image') is-invalid @enderror" placeholder="" aria-describedby="coverImageHelper">
        <small id="coverImageHelper" class="text-muted">Replace the cover image of your project</small>
    </div>

    <div class="mb-3">
        <label for="body" class="form-label">Description</label>
        <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" rows="5" value="{{old($project->body)}}"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection