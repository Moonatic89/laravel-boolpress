@extends('layouts.admin')


@section('content')

<div class="container">

    <h1>Add a new Post</h1>

    <!-- Call route -->
    <form action="{{route('admin.posts.store')}}" method="post">
        @csrf

        <!-- TITLE -->
        <div class="mb-3">
            <label for="title" class="form-label">Movie Name</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Type here Post title"
                aria-describedby="titleHelper" required>
            <small id="titleHelper" class="text-muted">Here goes new Post title</small>
        </div>

        <!-- IMAGE -->
        <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            <input type="text" name="image" id="image" class="form-control" placeholder="Insert here image Url"
                aria-describedby="titleHelper" required>
            <small id="titleHelper" class="text-muted">Here goes new Post url.</small>
        </div>

        <!-- TEXT -->
        <div class="mb-3">
            <label for="text" class="form-label">Insert here Post text</label>
            <textarea class="form-control" name="text" id="text" rows="3"></textarea>
        </div>

        <!-- Category FK -->
        <div class="form-group">
            <label for="category_id">Categories</label>
            <select class="form-control" name="category_id" id="category_id">
                <option selected disabled>Select a category</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>




        <button type="submit" class="btn btn-success">Save</button>

    </form>
</div>
@endsection