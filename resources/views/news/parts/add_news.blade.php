@extends('news.post')

{{-- Добавить через стек js  библиотеку CK Editor --}}
@section('crud-forms')
<div class="col-lg-8">
        <div class="">
            <h2>{{ $title}}</h2>
        </div>
        @include('news.parts.alerts-sessions')
        <form id="edit-form" method="post" enctype="multipart/form-data" action="{{ route('news.add_post') }}">
            <style>
            #edit-form b{color: brown}
            </style>



            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
            <input type="file" class="filestyle" data-buttonText="Добавить Изображение">
            </div>
            
                <div class="form-group">
                <label for="title">Заголовок <b>*</b></label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Заголовок">
            </div>
            <div class="form-group">
                <input type="file" 
                data-btnClass="btn-primary" 
                class="filestyle" 
                data-buttonBefore="true"
                iconName="fa fa-folder"
                {{-- data-placeholder="{{ $post->image }}" --}}
                buttonName="btn btn-info"
                data-buttonText="Загрузить Изображение">
            </div>
            <div class="form-group">
                    @php
                        $parent_id = old('parent_id') ?? $category->parent_id ?? 0;
                    @endphp
                    <label for="parent_id">Категория Новостей <b>*</b></label>
                    <select name="parent_id" class="form-control" title="Родитель">
                        <option value="0">Без Категории</option>
                        @include('news.parts.parents', ['level' => -1, 'parent' => 0])
                    </select>
            </div>
            <div class="form-group">
                <label for="content">Содержание <b>*</b></label>
                <textarea class="form-control" id="editor" name="content" rows="8" placeholder="Content" >{{ old('content') }}</textarea>
            </div>
            <div class="form-group">
                <label for="excerpt">Анос статьи. (Выводиться на главной странице)</label>
                <textarea class="form-control" id="excerpt" name="excerpt" rows="5"placeholder="Excerpt" >{{ old('excerpt') }}</textarea>
            </div>
            <p>Звездочкой ( <b>*</b> ) помечены поля обязательные для заполнения.</p>
            <button type="submit" class="btn btn-primary"
                    onclick="event.preventDefault();
                                    document.getElementById('edit-form').submit();"
            >Добавить</button>
        </form>
</div>
<div class="col-lg-4">
        @include('news.sidebar')
        @include('template.widgets.latest-post')
    </div>

@endsection

@push('addscript')
<script src="{{ asset('assets/vendors/ckeditor/ckeditor.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap-filestyle.min.js')}} "> </script>
<script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace( 'content' );
    </script>
@endpush