@extends('news.post')
@section('crud-forms')
@if ($posts->count())
        <table class="table table-bordered">
            <tr>
                <th width="15%">Дата</th>
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
                    <td>
                        {{-- @if ($post->editor) --}}
                            {{-- {{ $post->editor->name }} --}}
                        {{-- @endif --}}
                    </td>
                    <td>
                        {{-- @perm('manage-posts') --}}
                            <a href="{{ route('help', ['post' => $post->id]) }}"
                               title="Предварительный просмотр">
                                <i class="far fa-eye"></i>
                            </a>
                        {{-- @endperm --}}
                    </td>
                    {{-- <td> --}}
                        {{-- @perm('publish-post') --}}
                            {{-- @if ($post->isVisible()) --}}
                                {{-- <a href="{{ route('admin.post.disable', ['post' => $post->id]) }}" --}}
                                   {{-- title="Запретить публикацию"> --}}
                                    {{-- <i class="far fa-toggle-on"></i> --}}
                                {{-- </a> --}}
                            {{-- @else --}}
                                {{-- <a href="{{ route('help', ['post' => 1]) }}" --}}
                                   {{-- title="Разрешить публикацию"> --}}
                                    {{-- <i class="far fa-toggle-off"></i> --}}
                                {{-- </a> --}}
                            {{-- @endif --}}
                        {{-- @endperm --}}
                    {{-- </td> --}}
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

@endsection