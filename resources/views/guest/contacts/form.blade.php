@extends('layouts.app')

@section('content')


<h1>CONTACTS </h1>

<form action="#" method="post">
    @csrf

    <!-- NAME -->
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Mark Red"
            aria-describedby="nameHelp">
        <small id="nameHelp" class="text-muted">Type your name above</small>
    </div>

    <!-- EMAIL -->
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Mark@Red"
            aria-describedby="emailHelp">
        <small id="emailHelp" class="text-muted">Type your email above</small>
    </div>

    <!-- OBJECT -->
    <div class="form-group">
        <label for="object">Email</label>
        <input type="text" name="object" id="object" class="form-control" placeholder="Ask for 100% discount"
            aria-describedby="emailHelp">
        <small id="objectHelp" class="text-muted">Type your email object above</small>
    </div>

    <!-- BODY -->
    <div class="form-group">
        <label for="body">Message Body</label>
        <textarea class="form-control" name="body" id="body" rows="5"></textarea>
    </div>

    <button type="submit" class="btn btn-primary text-white mt-3"><i class="fas fa-envelope-open fa-lg fa-fw"></i>
        Send</button>
</form>


@endsection