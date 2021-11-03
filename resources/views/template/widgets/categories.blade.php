<div class="blog-widget mb-4">
        <h6 class="mb-4">{{ __('menu.Categories') }}</h6>
        <div class="list-group list-group-right-arrow">
            @if ($items->count())
            @foreach($items as $item)

                    <a href="{{ route('news.cat', ['category' => $item->slug]) }}"
                    class="list-group-item bg-light">{{ $item->name }}<span class="badge badge-info float-right">{{ $item->news->where('published_at','<=',now())->count() }}</span></a>

            @endforeach

            @endif

        </div>
</div>

