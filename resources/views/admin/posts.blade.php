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
                        {!! Form::open(array('method' => 'get', 'action' => array('AdminController@updatePost', $post->id))) !!}
                            {{ Form::submit('Update!', ['class' => 'btn btn-success']) }}
                        {!! Form::close() !!}
                    </td>
                    <td>
                        {!! Form::open(array('method' => 'post', 'action' => array('PostController@deletePost', $post->id))) !!}
                            {{ Form::submit('Delete!', ['class' => 'btn btn-warning']) }}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
