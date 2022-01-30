@extends('layouts.admin')

@section('content')


<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Category</th>
            <th>Likes</th>
            <th>Text</th>
            <th>Actions</th>

        </tr>
    </thead>

    @foreach($posts as $post)
    <tbody>
        <tr>
            <td scope="row">{{$post->title}}</td>
            <td>
                {{ $post->category ? $post->category->name : 'Uncategorized'}}
            </td>
            <td>{{$post->likes}}</td>
            <td>€{{$post->text}}</td>
            <td>

                <a class="btn btn-primary" href="{{route('admin.posts.show', $post->id)}}">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
                <a class="btn btn-primary" href="{{route('admin.posts.edit', $post->id)}}">
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