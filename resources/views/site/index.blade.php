@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="text-center">Look up yours essays!</h1>
                <hr>
                @if (count($posts) != 0)
                    @foreach ($posts as $post)
                        <h3 class="text-center">{{ $post->title }}</h3>
                        <p style="text-indent: 20px;">{{ $post->body }}</p>
                        <div><strong>Score: {{ $post->score }}</strong></div>
                        @if ($post->checked)
                            <div><em>Checked!</em></div>
                        @else
                            <div><em>Not checked yet!</em></div>
                        @endif
                        <hr>
                    @endforeach
                @else
                    <div class="form-group">
                        <div class="text-center">You don't have any essays!</div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <a href="{{ route('posts.create') }}" class="btn btn-default btn-lg btn-group-justified"> Put new essay! </a>

</div>
@endsection
