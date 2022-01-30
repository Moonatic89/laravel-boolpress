@extends('layouts.admin')


@section('content')

<div class="container">

    <h1>Edit your Post</h1>

    @include('partials.system.errors')

    <!-- MAIN -->
    <form action="{{route('admin.posts.update', $post->id)}}" method="post">
        @csrf
        @method('PUT')


        <!-- TITLE -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                aria-describedby="helpId" value="{{$post->title}}" placeholder="Type here your new Title">
            <small id="titleHelper" class="form-text text-muted">Type a title for this item.</small>
            @error('title')
            <div class="alert alert-danger">{{$msg}}</div>
            @enderror
        </div>

        <!-- THUMBNAIL -->
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control @error('image') is-invalid @enderror" name="image" id="image"
                aria-describedby="helpId" value="{{$post->image}}" placeholder="Type here your new image path">
            <small id="imageHelper" class="form-text text-muted">Type a image path for this item.</small>
            @error('image')
            <div class="alert alert-danger">{{$msg}}</div>
            @enderror
        </div>

        <!-- TEXT -->
        <div class="mb-3">
            <label for="text" class="form-label">text</label>
            <textarea class="form-control @error('text') is-invalid @enderror" name="text" id="text" rows="3">
            {{$post->text}}
            </textarea>
            @error('text')
            <div class="alert alert-danger">{{$msg}}</div>
            @enderror
        </div>

        <!-- Category -->
        <div class="form-group">
            <label for="category_id">Categories</label>
            <select class="form-control" name="category_id" id="category_id">
                <option value="">Select a category</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}"
                    {{$category->id == old('category', $post->category_id) ? 'selected' : ''}}>{{$category->name}}
                </option>
                @endforeach
            </select>
        </div>




        <button type="submit" class="btn btn-success">Update</button>

    </form>
</div>



@endsection