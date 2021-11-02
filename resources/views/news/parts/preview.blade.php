@extends('news.post')
@section('crud-forms')
    <div class="card mb-4">
        <div class="card-header">
            <h1>
                @if ( ! $post->isVisible())
                    <i class="far fa-eye-slash text-danger" title="Предварительный просмотр"></i>
                @else
                    <i class="far fa-eye text-success" title="Этот пост опубликован"></i>
                @endif
                {{ $post->name }}
            </h1>
        </div>
        <div class="card-body">
            <img src="http://via.placeholder.com/1000x300" alt="" class="img-fluid">
            {{-- @perm('manage-posts') --}}
                {!! $post->content !!}
            {{-- @else --}}
                <p>{{ $post->excerpt }}</p>
            {{-- @endperm --}}
        </div>
        <div class="card-footer d-flex justify-content-between">
            <span>
                Автор:
                <a href="{{ route('news', ['user' => $post->user->id]) }}">
                    {{ $post->user->name }}
                </a>
                <br>
                Дата: {{ $post->created_at }}
            </span>
            <span>
                {{-- @perm('publish-post') --}}
                    @if ($post->isVisible())
                        <a href="{{ route('news.disable', ['id' => $post->id]) }}"
                           class="btn btn-dark" title="Запретить публикацию">
                                <i class="fas fa-toggle-on text-success"></i>
                            </a>
                    @else
                        <a href="{{ route('news.enable', ['id' => $post->id]) }}"
                           class="btn btn-dark" title="Разрешить публикацию">
                                <i class="fas fa-toggle-off text-white"></i>
                            </a>
                    @endif
                {{-- @endperm --}}
                {{-- @perm('edit-post') --}}
                    <a href="{{ route('news.edit', ['id' => $post->id]) }}"
                       class="btn btn-primary" title="Редактировать пост">
                        <i class="far fa-edit"></i>
                    </a>
                {{-- @endperm --}}
                {{-- @perm('delete-post') --}}
                    <form action="{{ route('news.delete_post', ['id' => $post->id]) }}"
                          method="post" class="d-inline" onsubmit="return confirm('Удалить этот пост?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" title="Удалить пост">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </form>
                {{-- @endperm --}}
            </span>
        </div>
        @if ($post->tags->count())
            <div class="card-footer">
                Теги:
                @foreach($post->tags as $tag)
                    @php $comma = $loop->last ? '' : ' • ' @endphp
                    <a href="{{ route('news.tags', ['tag' => $tag->slug]) }}">
                        {{ $tag->name }}</a>
                    {{ $comma }}
                @endforeach
            </div>
        @endif
    </div>
    @isset($comments)
        @include('admin.post.comments', ['comments' => $comments])
    @endisset
@endsection