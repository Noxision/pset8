@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Edit user!</h1>
            <hr>

            {{ Form::model($user, ['method' => 'patch', 'route' => ['users.update', $user->id]]) }}

                <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                {{ Form::label('email', 'Email') }}
                {{ Form::text('email', null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                {{ Form::label('password', 'Password') }}
                {{ Form::text('password', null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                {{ Form::label('status', 'Admin status') }}
                {{ Form::checkbox('status') }}
                </div>

                <div class="form-group">
                {{ Form::label('banned', 'Banned') }}
                {{ Form::checkbox('banned') }}
                </div>

                <div class="form-group">
                {{ Form::submit('Update User!', ['class' => 'btn btn-success btn-lg btn-block']) }}
                </div>

            {{ Form::close() }}

        </div>
    </div>
</div>
@endsection
