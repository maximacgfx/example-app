@extends('news.post')
@section('crud-forms')
<div class="col-lg-9">
        <div class="">
            <h2>{{ $title}}</h2>
        </div>
        @include('news.parts.alerts-sessions')
        @if ($posts->count())
        <table class="table table-bordered">
            <tr>
                <th width="20%">Дата</th>
                <th width="60%">Наименование</th>
                <th width="25%">Автор публикации</th>
            
                <th><i class="fas fa-eye"></i></th>
                <th><i class="fas fa-toggle-on"></i></th>
                <th><i class="fas fa-edit"></i></th>
                <th><i class="fas fa-trash-alt"></i></th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->created_at->format('M jS Y') }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->user->name }}</td>
                    {{-- <td> --}}
                        {{-- @if ($post->editor) --}}
                            {{-- {{ $post->editor->name }} --}}
                        {{-- @endif --}}
                    {{-- </td> --}}
                    <td>
                        {{-- @perm('manage-posts') --}}
                            <a href="{{ route('help', ['post' => $post->id]) }}"
                            title="Предварительный просмотр">
                                <i class="fas fa-eye"></i>
                            </a>
                        {{-- @endperm --}}
                    </td>
                    <td>
                        {{-- @perm('publish-post') --}}
                            @if ($post->isVisible())
                                <a href="{{ route('news.disable', ['id' => $post->id]) }}"
                                title="Запретить публикацию">
                                    <i class="fas fa-toggle-on"></i>
                                </a>
                            @else
                                <a href="{{ route('news.enable', ['id' => $post->id]) }}"
                                title="Разрешить публикацию">
                                    <i class="fas fa-toggle-off"></i>
                                </a>
                            @endif
                        {{-- @endperm --}}
                    </td>
                    <td>
                        {{-- @perm('edit-post') --}}
                            <a href="{{ route('news.edit_post', ['id' => $post->id]) }}">
                                <i class="far fa-edit"></i>
                            </a>
                        {{-- @endperm --}}
                    </td>
                    <td>
                        {{-- @perm('delete-post') --}}
                            <form action="{{ route('help', ['post' =>1]) }}"
                                method="post" onsubmit="return confirm('Удалить этот пост?')">
                                @csrf
                                {{-- // @ method('DELETE') --}}
                                <button type="submit" class="m-0 p-0 border-0 bg-transparent">
                                    <i class="far fa-trash-alt text-danger"></i>
                                </button>
                            </form>
                        {{-- @endperm --}}
                    </td>
                </tr>
            @endforeach
        </table>
        @include('pagination.page')
        @endif    
</div>
<div class="col-lg-3">
    @include('news.sidebar')
    {{-- @include('template.widgets.latest-post') --}}
</div>

    

@endsection