@extends('layouts.admin')


@section('content')

<div class="container">

    <h1>Add a new Post</h1>

    @include('partials.system.errors')



    <!-- Call route -->
    <form action="{{route('admin.posts.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- TITLE -->
        <div class="mb-3">
            <label for="title" class="form-label">Movie Name</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is_invalid @enderror"
                placeholder="Type here Post title" aria-describedby="titleHelper" required>
            <small id="titleHelper" class="text-muted">Here goes new Post title</small>
        </div>

        <!-- IMAGE -->
        <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            <input type="file" name="image" id="image" class="form-control @error('image') is_invalid @enderror"
                placeholder="Insert here image Url" aria-describedby="titleHelper" required>
            <small id="titleHelper" class="text-muted">Here goes new Post url.</small>
        </div>

        <!-- TEXT -->
        <div class="mb-3">
            <label for="text" class="form-label ">Insert here Post text</label>
            <textarea class="form-control @error('text') is_invalid @enderror" name="text" id="text"
                rows="3"></textarea>
        </div>

        <!-- Category -->
        <div class="form-group">
            <label for="category_id">Categories</label>
            <select class="form-control @error('category_id') is_invalid @enderror" name="category_id" id="category_id">
                <option selected disabled>Select a category</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <!-- Tags -->
        <div class="form-group">
            <label for="tags">Tags</label>
            <select multiple class="form-control @error('tags') is_invalid @enderror" name="tags[]" id="tags">
                @if($tags)
                @foreach($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
                @endif
            </select>
        </div>
        @error('tags')
        <div class="alert alert-danger">{{ $msg }}</div>
        @enderror




        <button type="submit" class="btn btn-success">Save</button>

    </form>
</div>
@endsection