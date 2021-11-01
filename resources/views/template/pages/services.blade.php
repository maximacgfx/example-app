@extends('template.index')


@section('head')
    <title>Hasyl | Services Page</title>
    <!-- Meta -->
    <meta name="description" content="Сервисы предлагаемые компанией Hasyl Cesmesi">
    <meta name="author" content="HasylDigital">
@endsection

@section('header')
    @include('template.parts.header')
@endsection

@section('content')
    @include('template.sections.services')

    <main role="main">

            <div class="wt-section">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-md-5">
                                <h5 class="text-primary">Our Services</h5>
                                <h2 class="mb-4">Find the best services and consulting for affordable deals</h2>
                                <p class="text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eligendi fugiat labore libero molestias provident quae quaerat quis!  </p>
                            </div>
                            <div class="col-md-6">
                                <img src="assets/img/services/business-1.jpg" class="w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
    
    @include('template.sections.our-products')

    @include('template.sections.best-deals') 
    @include('template.sections.best-awarded') 
    
                     

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
    
            
            
            --}}

    </main>            

@endsection

@section('footer')
    @include('template.parts.footer')
@endsection


@section('scripts')
    @include('template.parts.script')
@endsection