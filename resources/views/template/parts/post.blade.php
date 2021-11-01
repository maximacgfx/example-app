<div class="card mb-4">
        <div class="card-header">
            <h2>{{ $post->title }}</h2>
        </div>
        <div class="card-body">
            <img src="https://via.placeholder.com/1000x300" alt="" class="img-fluid">
            <p class="mt-3 mb-0">{{ $post->excerpt }}</p>
        </div>
        <div class="card-footer">
            <div class="clearfix">
                <span class="float-left">
                    Автор:
                    {{-- <a href="{{ route('news.author', ['user' => $post->user->id]) }}"> --}}
                        {{ $post->user->name }}
                    </a>
                    <br>
                    Дата: {{ $post->created_at }}
                </span>
                <span class="float-right">
                    {{-- <a href="{{ route('news.slug', ['post' => $post->slug]) }}" --}}
                            <a class="btn btn-info">Читать дальше</a>
                </span>
            </div>
        </div>
        @if ($post->tags->count())
            <div class="card-footer">

                <h6 class="mb-0">Tags:
                        @if ($post->tags->count())

                            @foreach($post->tags as $tag)

                                <a href="{{ route('news.tags', ['tag' => $tag->slug]) }}" class="badge badge-pill badge-dark">{{ $tag->name }}</a>
                            @endforeach
                            @endif
                </h6>
            </div>
        @endif
    </div>
