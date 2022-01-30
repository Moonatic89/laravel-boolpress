@extends('layouts.app')


@section('content')

<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">Category: {{$category->name}}</h1>

    </div>
</div>

<div class="container">
    <div class="row">
        @forelse($posts as $post)
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{$post->image}}" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{$post->title}}</h4>
                    <p class="card-text">{{$post->text}}</p>
                </div>
            </div>
        </div>
        @empty
        <div class="col">
            <p>Sorry nothing to show here 😱</p>
        </div>
        @endforelse

    </div>
    {{ $posts->links() }}
</div>


@endsection