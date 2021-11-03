@extends('template.index')
@section('head')
    <title>Hasyl News | {{ $post->title}}</title>
    <!-- Meta -->
    <meta name="description" content="{{ $post->excerpt}}">
    <meta name="author" content="HasylDigital">
@endsection
@section('header')
    @include('template.parts.header')
@endsection
@section('content')
    @include('template.sections.blog-single')
    <main role="main">
        <section class="wt-section">
            <div class="container">
                <div class="row justify-content-between">

                    <div class="col-lg-8">
                        {{-- @auth
                        @include('news.parts.alerts-sessions')
                        @endif --}}
                        @include('template.sections.blog-content-single')
                        {{-- @auth
                        @include('news.parts.preview_footer')
                        @endif --}}
                        {{--                            @include('template.sections.blog-content-single-cache')--}}
                        {{-- @include('template.sections.comments') --}}
                    </div>
                    <div class="col-lg-4">
                        @auth
                            @include('news.sidebar')
                            @include('template.widgets.latest-post')

                        @else
                            @include('template.widgets.search')
                            @include('template.widgets.categories')
                            @include('template.widgets.latest-post')
                        @endif


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
