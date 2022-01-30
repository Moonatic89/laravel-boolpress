@extends('layouts.admin')

@section('content')



<div class="layout d-flex justify-content-between mt-5">
    <div class="myForm col-6 ">
        <form action="{{route('admin.categories.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Category name"
                    aria-describedby="nameHelper">
                <small id="nameHelper" class="text-muted">Type a category name</small>
            </div>
            <button type="submit" class="btn btn-success">Add category</button>
        </form>
    </div>

    <div class="myCategories col-6 ms-2">

        @foreach ($categories as $category)

        <div class="card">
            <div class="card-body d-flex justify-content-between align-items-center">

                <div class="categoryName d-flex align-items-center">

                    <span
                        class="badge rounded-pill me-2 {{ ($category->posts()->count() > 0) ? 'bg-success' : 'bg-danger' }} ">

                        {{ $category->posts()->count() }}

                    </span>

                    {{$category->name}}

                </div>

                <div class="delete">

                    <form action="{{route('admin.categories.destroy', $category->id)}}" method="post">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger text-light">
                            <i class="fas fa-trash fa-lg fa-fw"></i>
                        </button>
                    </form>


                </div>





            </div>
        </div>

        @endforeach
    </div>







</div>





@endsection