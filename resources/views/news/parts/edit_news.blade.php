@extends('news.post')
@section('crud-forms')
<div class="col-lg-8">
        <div class="">
            <h2>{{ $title}}</h2>
        </div>
        @include('news.parts.alerts-sessions')
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
                    @php
                        $parent_id = old('parent_id') ?? $post->category_id ?? 0;
                        // $parent_id = $post->category_id;
                    @endphp
                    <select name="parent_id" class="form-control" title="Родитель">
                        <option value="0">Без родителя</option>
                        @include('news.parts.parents', ['level' => -1, 'parent' => 0])
                    </select>
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
            <button type="submit" class="btn btn-primary mb-3"
                    onclick="event.preventDefault();
                                document.getElementById('edit-form').submit();"
            >Обновить</button>
        </form>
        @include('news.parts.preview_footer')       
</div>
<div class="col-lg-4">
    @include('news.sidebar')
    @include('template.widgets.latest-post')
</div>

@endsection


@push('addscript')
<script src="{{ asset('assets/vendors/ckeditor/ckeditor.js')}}"></script>
<script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace( 'content' );
    </script>
@endpush