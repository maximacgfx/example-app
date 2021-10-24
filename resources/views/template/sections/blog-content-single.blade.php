<div class="blog-post">                
            <a href="#"><img class="rounded mb-lg-4 mb-3" src="{{ $image }}" alt="card image"></a> 
            <div class="meta font-lora mb-3">
                <a href="#">Front-end</a> 
                <a>{{ $post->published_at->format('M jS Y g:ia') }}</a>
                <button class="btn btn-primary" onclick="history.go(-1)">Back</button>
            </div>
            {{ $post->content }}

            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eligendi fugiat labore libero molestias provident quae </p>
            
                <p>Mauris aliquam orci elit, a ullamcorper elit rutrum ac. Aliquam erat dolor, tincidunt eu diam eu, ultricies laoreet risus. Morbi consequat lorem eu justo ullamcorper tempor. Nullam suscipit ipsum dapibus commodo fringilla. </p>
                
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eligendi fugiat labore libero molestias provident quae </p>
                
                <p>Mauris aliquam orci elit, a ullamcorper elit rutrum ac. Aliquam erat dolor, tincidunt eu diam eu, ultricies laoreet risus. Morbi consequat lorem eu justo ullamcorper tempor. Nullam suscipit ipsum dapibus commodo fringilla. </p>
                
                <h3>Trending Technologies:</h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eligendi fugiat labore libero molestias provident quae </p>
                    <p>Mauris aliquam orci elit, a ullamcorper elit rutrum ac. Aliquam erat dolor, tincidunt eu diam eu, ultricies laoreet risus. Morbi consequat lorem eu justo ullamcorper tempor. Nullam suscipit ipsum dapibus commodo fringilla. </p>
                    
                    <h3>Fullstack Advantages:</h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eligendi fugiat labore libero molestias provident quae </p>
                    <p>Mauris aliquam orci elit, a ullamcorper elit rutrum ac. Aliquam erat dolor, tincidunt eu diam eu, ultricies laoreet risus. Morbi consequat lorem eu justo ullamcorper tempor. Nullam suscipit ipsum dapibus commodo fringilla. </p>
        </div>
<h6 class="mb-0">Tags:
        @if ($post->tags->count())

            @foreach($post->tags as $tag)

                <a href="{{ route('news.tags', ['tag' => $tag->slug]) }}" class="badge badge-pill badge-dark">{{ $tag->name }}</a>
            @endforeach
            @endif
</h6>
<button class="btn btn-primary" onclick="history.go(-1)">Back</button>
                        
