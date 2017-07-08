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
                    <td>{{ $user->banned }}</td>
                    <td>
                        {{ Form::open(['method' => 'get', 'route' => ['users.edit', $user->id]]) }}
                            {{ Form::submit('Edit!', ['class' => 'btn btn-success']) }}
                        {{ Form::close() }}
                    </td>
                    <td>
                        {{ Form::open(['method' => 'delete', 'route' => ['users.destroy', $user->id], 'onsubmit' => 'return confirm("Are you sure?")']) }}
                            {{ Form::submit('Delete!', ['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
