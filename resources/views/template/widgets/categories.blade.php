<div class="blog-widget mb-4">
        <h6 class="mb-4">Categories</h6>
        <div class="list-group list-group-right-arrow">
            <a href="#" class="list-group-item bg-light">Webdesign (10)</a>
            <a href="#" class="list-group-item bg-light">Front-end (22)</a>
            <a href="#" class="list-group-item bg-light">Fullstack (12)</a>
            <a href="#" class="list-group-item bg-light">UI Design (32)</a>
            @if ($items->count())

            @foreach($items as $item)
               
                    <a href="{{ route('news.cat', ['category' => $item->slug]) }}"
                    class="list-group-item bg-light">{{ $item->name }}</a>
                
            @endforeach
        
            @endif

        </div>
</div> 

