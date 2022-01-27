@extends('layouts.admin')

@section('content')

<div class="content">

    {{$product->title}}

    IMAGE HERE
    <!-- <img src="{{$product->image}}" alt="{{$product->title}}" width="100"> -->

    {{$product->size}}
    €{{$product->price}}
    {{$product->data}}
    {{$product->description}}



</div>






@endsection