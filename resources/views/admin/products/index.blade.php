@extends('layouts.admin')

@section('content')


<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Thumbnail</th>
            <th>Size</th>
            <th>Price</th>
            <th>Actions</th>

        </tr>
    </thead>

    @foreach($products as $product)
    <tbody>
        <tr>
            <td scope="row">{{$product->title}}</td>
            <td>
                IMAGE HERE
                <!-- <img src="{{$product->image}}" alt="{{$product->title}}" width="100"> -->
            </td>
            <td>{{$product->size}}</td>
            <td>€{{$product->price}}</td>
            <td>
                <i class="fa fa-eye" aria-hidden="true"></i>
                <i class="fas fa-pencil-alt    "></i>
                <i class="fa fa-trash" aria-hidden="true"></i>


            </td>
        </tr>
    </tbody>

    @endforeach
</table>




@endsection