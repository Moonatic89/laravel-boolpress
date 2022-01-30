@extends('layouts.admin')


@section('content')

<div class="container">

    <h1>Edit your Product</h1>

    @include('partials.system.errors')


    <form action="{{route('admin.products.update', $product->id)}}" method="post">
        @csrf
        @method('PUT')


        <!-- TITLE -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                aria-describedby="helpId" value="{{$product->title}}" placeholder="Type here your new Title">
            <small id="titleHelper" class="form-text text-muted">Type a title for this item.</small>
            @error('title')
            <div class="alert alert-danger">{{$msg}}</div>
            @enderror
        </div>

        <!-- THUMBNAIL -->
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control @error('image') is-invalid @enderror" name="image" id="image"
                aria-describedby="helpId" value="{{$product->image}}" placeholder="Type here your new image path">
            <small id="imageHelper" class="form-text text-muted">Type a image path for this item.</small>
            @error('image')
            <div class="alert alert-danger">{{$msg}}</div>
            @enderror
        </div>

        <!-- SIZE -->
        <div class="mb-3">
            <label for="size" class="form-label">Size</label>
            <input type="text" class="form-control @error('size') is-invalid @enderror" name="size" id="size"
                aria-describedby="helpId" value="{{$product->size}}" placeholder="Type here your product size">
            <small id="sizeHelper" class="form-text text-muted">Type a size for this item.</small>
            @error('size')
            <div class="alert alert-danger">{{$msg}}</div>
            @enderror
        </div>

        <!-- Price -->
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price"
                aria-describedby="helpId" value="{{$product->price}}" placeholder="Type here your product price">
            <small id="priceHelper" class="form-text text-muted">Type a price for this item.</small>
            @error('price')
            <div class="alert alert-danger">{{$msg}}</div>
            @enderror
        </div>

        <!-- Date -->
        <div class="mb-3">
            <label for="size" class="form-label">date</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" id="date"
                aria-describedby="helpId" value="{{$product->date}}" placeholder="Type here your product date">
            <small id="dateHelper" class="form-text text-muted">Type a date for this item.</small>
            @error('date')
            <div class="alert alert-danger">{{$msg}}</div>
            @enderror
        </div>

        <!-- DESCRIPTION -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                id="description" rows="3">
            {{$product->description}}
            </textarea>
            @error('description')
            <div class="alert alert-danger">{{$msg}}</div>
            @enderror
        </div>


        <button type="submit" class="btn btn-success">Update</button>

        <!-- <img src="{{$product->image}}" alt="{{$product->title}}" width="100"> -->





    </form>
</div>



@endsection