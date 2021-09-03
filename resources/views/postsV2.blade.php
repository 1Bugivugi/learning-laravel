<x-layout content="hello there" banner="title">
{{--    <x-slot></x-slot>--}}
    @foreach($posts as $post)
        <article>
            <h3>
                <a href="/posts/{{$post->slug}}">
                    {{$post->title}}
                </a>
            </h3>
            <div>
                <p>{{$post->excerpt}}</p>
            </div>
        </article>
    @endforeach
</x-layout>
