@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Restore Essays!</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Body</th>
                <th>Author</th>
                <th>Score</th>
                <th>Checked</th>
                <th>Restore</th>
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
                        {{ Form::open(['method' => 'patch', 'route' => ['posts.restore', $post->id], 'onsubmit' => 'return confirm("Are you sure?")']) }}
                            {{ Form::button('Restore!', ['type' => 'submit', 'class' => 'btn btn-submit']) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
