@extends('template.index')


@section('head')
    <title>Hasyl | Services Page</title>
    <!-- Meta -->
    <meta name="description" content="Адреса и контакты Hasyl Cesmesi">
    <meta name="author" content="HasylDigital">
@endsection

@section('header')
    @include('template.parts.header')
@endsection

@section('content')
    @include('template.sections.contact-us')

    <main role="main">

            @component('template.sections.icon-bloc')

            <h2>ConTActs</h2>
            <p class="text-muted">Looks like something went wrong on our end. Head back to the main homepage.</p>
            
            @slot('down','<h2>Down Slot</h2>')
            
            
            @endcomponent

    @include('template.sections.contact-form') 

    
                     

{{-- 
        @include('template.sections.our-services')

        @include('template.sections.all-solutions')

        @include('template.sections.top-consulting')


        @include('template.sections.our-clients')
        
        @include('template.sections.mission-vision-values')

        @include('template.sections.our-team') 

        @include('template.sections.best-solutions') 

        @include('template.sections.our-products')

        @include('template.sections.best-deals') 
        @include('template.sections.best-awarded') 

            @include('template.sections.icon-bloc')

    @include('template.sections.contact-form') 
    
     @include('template.sections.contact-us')
            
            
            --}}

    </main>            

@endsection

@section('footer')
    @include('template.parts.footer')
@endsection


@section('scripts')
    @include('template.parts.script')
@endsection