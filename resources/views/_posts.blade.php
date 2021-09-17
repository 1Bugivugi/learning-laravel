@extends('layout/layout')

@section('banner')
    <h1>My Blog</h1>
@endsection

@section('content')
    @foreach($posts as $post)
        <article>
            <h3>
                <a href="/posts/{{$post->slug}}">
                    {{$post->title}}
                </a>
            </h3>

            <p>
                By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a
                    href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
            </p>

            <div>
                <p>{{$post->excerpt}}</p>
            </div>
        </article>
    @endforeach
@endsection
