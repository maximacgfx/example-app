@if ($items->where('parent_id', $parent)->count())
    @php $level++ @endphp
    @foreach ($items->where('parent_id', $parent) as $item)
        <tr>
            <td>
                @if ($level)
                    {{ str_repeat('—', $level) }}
                @endif
                @if($level)
                    <a href="{{ route('news.cat',['category' =>$item->slug ])}}" ><span>{{ $item->name }}</span></a>
                    <span class="badge badge-dark float-right">{{ $item->news->count() }}</span>
                @else
                <a href="{{ route('news.cat',['category' =>$item->slug ])}}" ><strong>{{ $item->name }}</strong></a>
                <span class="badge badge-dark float-right">{{ $item->news->count() }}</span>
                @endif
            </td>
            <td>{{ $item->slug }}</td>
            <td>
                {{-- @perm('edit-category') --}}
                    <a href="{{ route('news.cat.edit', ['category' => $item->id]) }}">
                        <i class="far fa-edit"></i>
                    </a>
                {{-- @endperm --}}
            </td>
            <td>
                {{-- @perm('delete-category') --}}
                    <form action="{{ route('news.cat.delete_post', ['category' => $item->id]) }}"
                          method="post" onsubmit="return confirm('Удалить эту категорию?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="m-0 p-0 border-0 bg-transparent">
                            <i class="far fa-trash-alt text-danger"></i>
                        </button>
                    </form>
                {{-- @endperm --}}
            </td>
        </tr>
        @include('news.parts.all-ctgs', ['level' => $level, 'parent' => $item->id])
    @endforeach
@endif
