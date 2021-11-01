<div class="blog-post">
            <img class="rounded mb-lg-4 mb-3" src="{{ asset(  '/assets/img/blog/'  . $post->image     ) }}" alt="card image">
            <div class="meta font-lora mb-3">
                <a href="{{ route('news.author', ['user' => $post->user->id]) }}">{{ $post->user->name }}</a>
                <a>{{ $post->published_at->format('M jS Y g:ia') }}</a>
            </div>
            <h3>{{ $post->title }}</h3>
            <p> {{ $post->content }}</p>
</div>
<h6 class="mb-3">{{ __('menu.tags') }}:
        @if ($post->tags->count())

            @foreach($post->tags as $tag)

                <a href="{{ route('news.tags', ['tag' => $tag->slug]) }}" class="badge badge-pill badge-dark">{{ $tag->name }}</a>
            @endforeach
            @endif
</h6>
<div class="mb-0">
    <button class="btn btn-primary badge-pill" onclick="history.go(-1)">{{ __('menu.back') }}</button>
    @auth
        <a href="{{ route('news.edit', ['id' => $post->id]) }}" class="badge badge-pill badge-warning">Edit News</a>

    @endif
</div>


