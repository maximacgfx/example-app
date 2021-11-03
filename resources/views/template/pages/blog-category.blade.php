@extends('template.index')
@section('head')
    <title>{{ $title }}</title>
    <!-- Meta -->
    <meta name="description" content="Hasyl Cesmesi News Page">
    <meta name="author" content="HasylDigital">
@endsection
@section('header')
    @include('template.parts.header')
@endsection
@section('content')
    @include('template.sections.blog')
    <main role="main">
        <section class="wt-section">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-8">
                        @auth
                        @include('news.parts.alerts-sessions')
                        @endif
                        @include('template.sections.blog-content')
                        @include('pagination.page')

                        {{--                            {{ $posts->links('vendor.pagination.bootstrap-4') }}--}}

                        {{-- {{ $posts->links() }} --}}

                        {{-- @include('pagination.default', ['paginator' => $users]) --}}

                        {{-- @include('template.sections.blog-content')
                        @include('template.widgets.pagination') --}}
                    </div>
                    <div class="col-lg-4">
                        @auth
                            {{-- @include('news.sidebar') --}}
                        @endif
                        @include('template.widgets.search')
                        @include('template.widgets.categories')
                        @include('template.widgets.latest-post')
                        
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



