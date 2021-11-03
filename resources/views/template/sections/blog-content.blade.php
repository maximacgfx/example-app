
@foreach($posts as $post)

<div class="blog-post">
    <a href="/news/{{ $post->slug }}"><img class="rounded mb-lg-4 mb-3" src="{{ asset(  '/assets/img/blog/'  . $post->image     ) }}" alt="card image"></a>
    <div class="meta font-lora mb-3">
        <a href="/news/author/{{ $post->user->id }}">{{ $post->user->name }}</a>
        <a>{{ $post->published_at->format('M jS Y g:ia') }}</a>
    </div>
    <h3 class="blog-post-title"><a href="/news/{{ $post->slug }}">{{ $post->title }}</a></h3>

    <div class="mb-3">
        <p>{{ $post->excerpt }}</p>

    </div>

</div>

@endforeach

