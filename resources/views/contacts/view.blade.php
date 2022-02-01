@extends('layouts.app')


@section('content')

CONTACT US

<div class="container">
    <form action="">
        @csrf

        <div class="mb-3">
            <div class="col">
                <label for="name" class="form-label"></label>
                <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId"
                    required>
                <small id="nameHelper" class="text-muted">Help name text</small>

            </div>

            <div class="col"></div>
            <label for="email" class="form-label"></label>
            <input type="text" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="emailHelper" class="text-muted">Help name text</small>
        </div>





    </form>
</div>


@endsection