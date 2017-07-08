@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Post new essay!</h1>
            <hr>

            {{ Form::open(['route' => 'posts.store', 'method' => 'post']) }}

            <div class="form-group">
                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('body', 'Put your essay:') }}
                {{ Form::textarea('body', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::submit('Send essay!', ['class' => 'btn btn-success btn-lg btn-block']) }}
                {{ Form::close() }}
            </div>

        </div>
    </div>
</div>
@endsection