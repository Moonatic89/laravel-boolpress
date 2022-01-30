@extends('layouts.admin')

@section('content')



<div class="layout d-flex justify-content-between mt-5">
    <div class="myForm col-6">
        FORM
    </div>

    <div class="myCategories col-6">

        @foreach ($categories as $category)

        <div class="card">
            <div class="card-body">
                {{$category->name}}
            </div>
        </div>

        @endforeach
    </div>







</div>





@endsection