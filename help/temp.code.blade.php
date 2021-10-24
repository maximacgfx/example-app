$post->image

 <img src="{{ asset('assets/img/blog//{{$post->image}}') }}">

 src="assets/img/blog/{{ $post->image }}"



 @if ($post->tags->count())
        <div class="card-footer">
            Теги:
            @foreach($post->tags as $tag)
                @php $comma = $loop->last ? '' : ' • ' @endphp
                <a href="{{ route('blog.tag', ['tag' => $tag->slug]) }}">{{ $tag->name }}</a>
                {{ $comma }}
            @endforeach
        </div>



        <li>
                <a 
                href="{{ route('blog.category', ['category' => $item->slug]) }}"
                class="list-group-item bg-light">{{ $item->name }}</a>
            </li>