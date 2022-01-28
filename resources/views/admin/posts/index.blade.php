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
                <img src="{{$product->image}}" class="card-img-top" alt="{{$product->title}}" style="width: 150px; height: 50px; ">
                <!-- <img src="{{$product->image}}" alt="{{$product->title}}" width="100"> -->
            </td>
            <td>{{$product->size}}</td>
            <td>€{{$product->price}}</td>
            <td>

                <a class="btn btn-primary" href="{{route('admin.products.show', $product->id)}}">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
                <a class="btn btn-primary" href="{{route('admin.products.edit', $product->id)}}">
                    <i class="fas fa-pencil-alt    "></i>

                </a>
                <a class="btn btn-primary" href="#">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
    </tbody>

    @endforeach
</table>




@endsection