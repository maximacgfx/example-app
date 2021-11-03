@extends('template.index')
@section('head')
    <title>Предпросмотр  | {{ $post->title}}</title>
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
                        @include('news.parts.alerts-sessions')
                        @include('template.sections.blog-content-single')
                        {{--                            @include('template.sections.blog-content-single-cache')--}}
                        @include('news.parts.preview_footer')

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
