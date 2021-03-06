@extends('news.post')
@section('crud-forms')
<form id="edit-form" method="post" action="{{ route('news.edit_post' ,['id' => $post->id]) }}">
    <style>
        #edit-form b{color: brown}
        </style>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="id" value="{{ $post->id }}">
    <div class="form-group">
        <label for="title">Заголовок <b>*</b></label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" placeholder="Заголовок">
    </div>
    <div class="form-group">
        <label for="image">Изображение</label>
        <input type="text" class="form-control" id="image" value="{{ $post->image }}" name="image" placeholder="img">
    </div>
    <div class="form-group">
        <label for="content">Content <b>*</b></label>
        <textarea class="form-control" id="content" name="content" rows="8">{{ $post->content }}</textarea>
    </div>
    <div class="form-group">
        <label for="excerpt">Excerpt</label>
        <textarea class="form-control" id="excerpt" name="excerpt" rows="5">{{ $post->excerpt }}</textarea>
        
    </div>
    <p>Звездочкой ( <b>*</b> ) помечены поля обязательные для заполнения.</p>
    <button type="submit" class="btn btn-primary"
            onclick="event.preventDefault();
                         document.getElementById('edit-form').submit();"
    >Обновить</button>
</form>
@endsection