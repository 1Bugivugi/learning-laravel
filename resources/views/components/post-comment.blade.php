@props(['comment'])

<article class="flex bg-gray-100 border rounded-xl border-gray-200 p-6 space-x-4">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/60" alt="" class="rounded-xl" width="60" height="60">
    </div>
    <div class="">
        <header class="mb-4">
            <h3 class="font-bold">{{$comment->author->username}}</h3>
            <p class="text-xs">Posted
                <time>{{$comment->created_at}}</time>
            </p>
        </header>

        <p>{{$comment->body}}</p>
    </div>
</article>
