@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Look up yours essays</h1>
                <hr>
                @if (count($posts) != 0)
                    @foreach ($posts as $post)
                        <h3>{{ $post->title }}</h3>
                        <div>{{ $post->body }}</div>
                        <div> Score: {{ $post->score }}</div>
                        @if ($post->checked)
                            <div>Checked!</div>
                        @else
                            <div>Not checked yet!</div>
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

    <a href="{{ route('essayForm') }}" class="btn btn-default btn-lg btn-group-justified"> Put new essay </a>

</div>
@endsection
