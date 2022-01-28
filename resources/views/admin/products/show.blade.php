@extends('layouts.admin')

@section('content')

<div class="content">

    <!-- 
    <div class="card text-white bg-light">
        <img class="card-img-top" src="{{asset ('img/Itto.jpg')}}" alt="{{$product->title}}" width="250">
        <div class="card-body">
            <h4 class="card-title">Title</h4>
            <p class="card-text">Text</p>
        </div>
    </div>
 -->
    <!-- 
    <div class="mycard">
        <div class="cardBorder">

            <div>
                <img src="{{$product->image}}" alt="{{$product->title}}">
            </div>
        </div>

    </div> -->

    <div class="card mt-3" style="width: 500px;">
        <img src="{{$product->image}}" class="card-img-top" alt="{{$product->title}}">
        <div class="card-body">

            <div class="firstRow d-flex justify-content-between">
                <h5 class="card-title">{{$product->title}}</h5>
                <h5 class="card-title">{{$product->size}}</h5>
                <h5 class="card-title">€{{$product->price}}</h5>
            </div>
            <p class="card-text">{{$product->description}}</p>

            <a class="btn btn-primary" href="{{route('admin.products.index', $product->id)}}">
                <i class="fas fa-hand-point-left"></i>
            </a>

            <a class="btn btn-primary" href="{{route('admin.products.edit', $product->id)}}">
                <i class="fas fa-pencil-alt    "></i>
            </a>


        </div>
    </div>

</div>






@endsection