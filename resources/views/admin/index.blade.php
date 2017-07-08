@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Edit menu</h1>
                <hr>
                <a href="{{ route('users.index') }}" class="btn btn-default btn-lg "> Edit Users! </a>
                <a href="{{ route('posts.index') }}" class="btn btn-default btn-lg "> Edit Essays! </a>
            </div>
        </div>
    </div>
</div>
@endsection
