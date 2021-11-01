@extends('template.index')
@section('head')
    <title>{{ $title}}</title>
@section('header')
    @include('template.parts.header')
@endsection
@section('content')
    <main role="main">
        <section class="wt-section">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-8">
                            <div class="">
                                <h2>{{ $title}}</h2>
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
                            @yield('crud-forms')       
                    </div>
                    <div class="col-lg-4">
                        @include('news.sidebar')
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
