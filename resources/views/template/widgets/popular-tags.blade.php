<div class="blog-widget mb-4">
        <h6 class="mb-4">{{ __('menu.PopularTags') }}</h6>
        <div class="list-group list-group-right-arrow">
            @if ($items->count())
            @foreach($items as $item)
<a class="list-group-item bg-light" href="{{ route('news.tags' , ['tag' => $item->slug] ) }}">{{ $item->name }} <span class="badge badge-dark float-right">{{ $item->news_count }}</span></a>                
            @endforeach 
            @endif

        </div>
</div>