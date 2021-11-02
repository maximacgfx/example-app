@extends('news.post')
@section('crud-forms')
<div class="col-lg-9">
        <div class="">
            <h2>{{ $title}}</h2>
        </div>
        @include('news.parts.alerts-sessions')

            {{-- @perm('create-category') --}}
                <a href="{{ route('news.cat.create') }}" class="btn btn-success mb-4">
                    Создать категорию
                </a>
            {{-- @endperm --}}
    <table class="table table-bordered">
        <tr>
            <th width="45%">Наименование</th>
            <th width="45%">ЧПУ (англ.)</th>
            <th><i class="fas fa-edit"></i></th>
            <th><i class="fas fa-trash-alt"></i></th>
        </tr>
        @include('news.parts.all-ctgs', ['level' => -1, 'parent' => 0])
    </table>


</div>
<div class="col-lg-3">
        @include('news.sidebar')
        @include('template.widgets.latest-post')
    </div>

@endsection