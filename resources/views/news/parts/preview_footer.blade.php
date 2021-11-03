<div class="card-footer d-flex justify-content-between">
    <span>
        Автор:
        <a href="{{ route('news.author', ['user' => $post->user->id]) }}">
            {{ $post->user->name }}
        </a>
        <br>
        Дата создания: {{ $post->created_at }}
        <br>
        Опубликовать: {{ $post->published_at }}
    </span>
    <span>
        {{-- @perm('publish-post') --}}
                <a class="btn btn-info" href="{{ route('news.preview', ['id' => $post->id]) }}"
                title="Предварительный просмотр">
                    <i class="fas fa-eye text-dark"></i>
                </a>

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