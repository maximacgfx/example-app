<div class="blog-widget mb-4">
        <h6 class="mb-4">{{ __('menu.Latest_Post') }}</h6>
        @foreach($items as $item)
        <div class="card border-0 bg-light mb-1">
            <div class="card-body row align-items-center">
                <div class="col-4">
                    <a href="{{ route('news.slug', ['slug' => $item->slug]) }}"><img class="card-img" src="{{ asset('assets/img/blog/' . $item->image) }}" alt=""></a>
                </div>
                <div class="col-8">
                    <h6 class="my-2 font-size-14"><a href="{{ route('news.slug', ['slug' => $item->slug]) }}">{{ $item->title }}</a></h6>
                    <span class="font-size-14 text-muted">{{ $item->published_at->format('M jS Y') }}</span>
                </div>
            </div>
        </div>
    @endforeach
</div>
