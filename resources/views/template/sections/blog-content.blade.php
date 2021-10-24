
@foreach($posts as $post)



<div class="blog-post">
    <a href="#"><img class="rounded mb-lg-4 mb-3" src="/assets/img/blog/{{ $post->image }}" alt="card image"></a>
    <h3><a href="/news/{{ $post->slug }}">{{ $post->title }}</a></h3>
    <div class="meta font-lora mb-3">
        <a href="#">Front-end</a>
        {{-- @if ($post->tags->count())
            @foreach($post->tags as $tag)
               
                <a href="#">{{ $tag->name }}</a>
                
            @endforeach
         @endif  --}}
        <a>{{ $post->published_at->format('M jS Y g:ia') }}</a>
    </div>
    <p>{{ $post->excerpt }}</p>
</div>

@endforeach

