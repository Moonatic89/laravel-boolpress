@extends('layouts.admin')

@section('content')

<div class="content">


    <div class="card mt-3" style="width: 500px;">

        IMAGE HERE BUT IS SLOW
        <!-- <img src="{{$post->image}}" class="card-img-top" alt="{{$post->title}}"> -->
        <div class="card-body">

            <div class="firstRow d-flex justify-content-between">
                <h5 class="card-title">{{$post->title}}</h5>
                <h5 class="card-title">
                    <i class="fas fa-thumbs-up"></i> {{$post->likes}}
                </h5>
            </div>
            <p class="card-text">{{$post->text}}</p>

            <em>Category: {{ $post->category ? $post->category->name : 'Uncategorized'}}</em>

            <a class="btn btn-primary" href="{{route('admin.posts.index', $post->id)}}">
                <i class="fas fa-hand-point-left"></i>
            </a>

            <a class="btn btn-primary" href="{{route('admin.posts.edit', $post->id)}}">
                <i class="fas fa-pencil-alt    "></i>
            </a>


        </div>
    </div>

</div>






@endsection