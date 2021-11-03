<div class="blog-widget mb-4">
        <h6 class="mb-4">{{ __('menu.Categories') }}</h6>
        <div class="list-group list-group-right-arrow">
            <a href="#" class="list-group-item bg-light">Webdesign (10)</a>
            <a href="#" class="list-group-item bg-light">Front-end (22)</a>
            <a href="#" class="list-group-item bg-light">Fullstack (12)</a>
            <a href="#" class="list-group-item bg-light">UI Design (32)</a>
            

            @if ($items->count())
            <ul>
            @foreach($items as $item)
                <li>
                    <a href="{{ route('blog.tag', ['tag' => $item->slug]) }}">{{ $item->name }}</a>
                    <span class="badge badge-dark float-right">{{ $item->posts_count }}</span>
                </li>
            @endforeach
            </ul>
            @endif

        </div>
</div>