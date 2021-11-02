@extends('news.post')
@section('crud-forms')
<div class="col-lg-8">
        <div class="">
            <h2>{{ $title}}</h2>
        </div>
        @include('news.parts.alerts-sessions')
        <form id="edit-form" method="post" action="{{ route('news.add_post') }}">
            <style>
            #edit-form b{color: brown}
            </style>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="title">Заголовок <b>*</b></label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Заголовок">
            </div>
            <div class="form-group">
                <label for="image">Изображение</label>
                <input type="text" class="form-control" id="image" value="{{ old('image') }}" name="image" placeholder="img">
            </div>
            <div class="form-group">
                <label for="content">Content <b>*</b></label>
                <textarea class="form-control" id="content" name="content" rows="8" placeholder="Content" >{{ old('content') }}</textarea>
            </div>
            <div class="form-group">
                <label for="excerpt">Excerpt</label>
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