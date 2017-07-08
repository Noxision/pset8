@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Essays!</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Body</th>
                <th>Author</th>
                <th>Score</th>
                <th>Checked</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->author }}</td>
                    <td>{{ $post->score }}</td>
                    <td>{{ $post->checked }}</td>
                    <td>
                        {{ Form::open(['method' => 'get', 'route' => ['posts.edit', $post->id]]) }}
                            {{ Form::submit('Edit!', ['class' => 'btn btn-success']) }}
                        {{ Form::close() }}
                    </td>
                    <td>
                        {{ Form::open(['method' => 'delete', 'route' => ['posts.destroy', $post->id], 'onsubmit' => 'return confirm("Are you sure?")']) }}
                            {{ Form::button('Delete!', ['type' => 'submit', 'class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
