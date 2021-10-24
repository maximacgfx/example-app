@extends('template.index')


@section('head')
    <title>Hasyl | 404 Page</title>
    <!-- Meta -->
    <meta name="description" content="Hasyl Cesmesi">
    <meta name="author" content="HasylDigital">
@endsection

@section('header')
    @include('template.parts.header')
@endsection

@section('content')
    @include('template.sections.404')

    <main role="main">

            @component('template.sections.icon-bloc')

            
            <h2>Page Not Found!</h2>
            <p class="text-muted">Looks like something went wrong on our end. Head back to the main homepage.</p>
            
            @slot('down')
                <h2>Down Slot</h2>
            @endslot
            
            @endcomponent

    </main>            

@endsection

@section('footer')
    @include('template.parts.footer')
@endsection


@section('scripts')
    @include('template.parts.script')
@endsection