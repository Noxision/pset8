@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Users!</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Role</th>
                <th>Banned</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->banned }}</td>
                    <td>
                        {!! Form::open(array('method' => 'get', 'action' => array('AdminController@updateUser', $user->id))) !!}
                            {{ Form::submit('Update!', ['class' => 'btn btn-success']) }}
                        {!! Form::close() !!}
                    </td>
                    <td>
                        {!! Form::open(array('method' => 'post', 'action' => array('AdminController@deleteUser', $user->id))) !!}
                            {{ Form::submit('Delete!', ['class' => 'btn btn-warning']) }}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
