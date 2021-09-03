@extends('layout/layout')

@section('content')
    <article>
        <h1>
            {{$post->name}}
        </h1>
        <div>
            <p>{!! $post->body !!}</p>
        </div>
    </article>

    <a href="/">Go Back</a>
@endsection
