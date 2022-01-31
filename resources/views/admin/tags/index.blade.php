@extends('layouts.admin')

@section('content')

<div class="layout d-flex justify-content-between mt-5">
    <div class="myForm col-6 ">
        <form action="{{route('admin.tags.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="tag name"
                    aria-describedby="nameHelper">
                <small id="nameHelper" class="text-muted">Type a tag name</small>
            </div>
            <button type="submit" class="btn btn-success">Add tag</button>
        </form>
    </div>

    <div class="mytags col-6 ms-2">

        @foreach ($tags as $tag)

        <div class="card">
            <div class="card-body d-flex justify-content-between align-items-center">

                <div class="tagName d-flex align-items-center">

                    <span
                        class="badge rounded-pill me-2 {{ ($tag->posts()->count() > 0) ? 'bg-success' : 'bg-danger' }} ">

                        {{ $tag->posts()->count() }}

                    </span>

                    {{$tag->name}}

                </div>

                <div class="delete">

                    <form action="{{route('admin.tags.destroy', $tag->id)}}" method="post">
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