@extends('template.index')
@section('head')
    <title>{{ $title}}</title>
    <!-- Meta -->
    {{--    <meta name="description" content="{{ $post->excerpt}}">--}}
    {{--    <meta name="author" content="HasylDigital">--}}
@endsection
@section('header')
    @include('template.parts.header')
@endsection
@section('content')
    {{--    @include('template.sections.blog-single')--}}
    <main role="main">
        <section class="wt-section">
            <div class="container">
                <div class="row justify-content-between">

                    <div class="col-lg-8">


                        <div class="">
                            <h2>Добавление нового материала</h2>
                        </div>

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif

                        <form id="edit-form" method="post" action="{{ route('news.add_post') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="title">Заголовок</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Заголовок">
                            </div>
                            <div class="form-group">
                                <label for="image">Изображение</label>
                                <input type="text" class="form-control" id="image" value="{{ old('image') }}" name="image" placeholder="img">
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control" id="content" name="content" rows="8" placeholder="Content" >{{ old('content') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="excerpt">Excerpt</label>
                                <textarea class="form-control" id="excerpt" name="excerpt" rows="5"placeholder="Excerpt" >{{ old('excerpt') }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary"
                                    onclick="event.preventDefault();
                                                     document.getElementById('edit-form').submit();"
                            >Добавить</button>
                        </form>






                    </div>
                    <div class="col-lg-4">
                        {{-- <div class="blog-widget mb-4">
                            <h6 class="mb-4">Single Widgets</h6>
                        </div> --}}
                        @include('news.sidebar')
                        @include('template.widgets.latest-post')
{{--                        @include('template.widgets.search')--}}
{{--                        @include('template.widgets.categories')--}}


                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('footer')
    @include('template.parts.footer')
@endsection
@section('scripts')
    @include('template.parts.script')
@endsection
