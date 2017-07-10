@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Edit essay!</h1>
            <hr>

            {{ Form::model($post, ['method' => 'patch', 'route' => ['posts.update', $post->id]]) }}

                <div class="form-group">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                {{ Form::label('body', 'Body') }}
                {{ Form::textarea('body', null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                {{ Form::label('score', 'Score') }}
                {{ Form::number('score', null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                {{ Form::label('checked', 'Checked') }}
                {{ Form::checkbox('checked') }}
                </div>

                <div class="form-group">
                {{ Form::submit('Update Essay!', ['class' => 'btn btn-success btn-lg btn-block']) }}
                </div>

            {{ Form::close() }}

        </div>
    </div>
</div>
@endsection
