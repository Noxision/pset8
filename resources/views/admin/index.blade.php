@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <div class="row">
            <h1 class="text-center">Administrator menu</h1>
            <hr>
            <div class="col-md-6">
                <a href="{{ route('users.index') }}" class="center-block btn btn-default btn-lg "> Edit Users! </a>
            </div>
            <div class="col-md-6">
                <a href="{{ route('posts.index') }}" class=" center-block btn btn-default btn-lg "> Edit Essays! </a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('users.trash') }}" class="center-block btn btn-default btn-lg "> Trash Users! </a>
            </div>
            <div class="col-md-6">
                <a href="{{ route('posts.trash') }}" class="center-block btn btn-default btn-lg "> Trash Essays! </a>
            </div>
        </div>
    </div>
</div>
@endsection
