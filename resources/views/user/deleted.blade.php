@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Restore Users!</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Banned</th>
                <th>Restore user</th>
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
                        {{ Form::open(['method' => 'patch', 'route' => ['users.restore', $user->id], 'onsubmit' => 'return confirm("Are you sure?")']) }}
                        {{ Form::button('Restore!', ['type' => 'submit', 'class' => 'btn btn-submit']) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
