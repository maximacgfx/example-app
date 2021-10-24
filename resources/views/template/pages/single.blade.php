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
                                @include('template.sections.blog-content-single')
                                {{-- @include('template.sections.comments') --}}
                        </div>
                        <div class="col-lg-4">
                                {{-- <div class="blog-widget mb-4">
                                    <h6 class="mb-4">Single Widgets</h6>
                                </div> --}}
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