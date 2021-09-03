@extends('layout/layout')

@section('banner')
    <h1>My Blog</h1>
@endsection

@section('content')
    @foreach($posts as $post)
        <article>
            <h3>
                <a href="/posts/{{$post->id}}">
                    {{$post->name}}
                </a>
            </h3>
            <div>
                <p>{{$post->excerpt}}</p>
            </div>
        </article>
    @endforeach
@endsection
