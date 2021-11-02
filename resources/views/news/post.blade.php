@extends('news.index')
@section('header')
    @include('template.parts.header')
@endsection
@section('content')
    <main role="main">
        <section class="wt-section">
            <div class="container">
                <div class="row justify-content-between">
                   @yield('crud-forms')
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
