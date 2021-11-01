@extends('template.index')


@section('head')
    <title>Hasyl | Home Page</title>
    <!-- Meta -->
    <meta name="keywords" content="Bootstrap Theme, Freebies, UI Kit, MIT license">
    <meta name="description" content="Bootstrap 4 Template by WebThemez">
    <meta name="author" content="HasylDigital">
@endsection

@section('header')
    @include('template.parts.header')
@endsection

@section('content')
    @include('template.sections.best-business')

    <main role="main">

            @include('template.sections.our-services')

            @include('template.sections.all-solutions')

            @include('template.sections.top-consulting')

            <div class="card bg-primary border-0 rounded-0 p-5">
                    <div class="container">
                      <div class="row justify-content-between align-items-center text-center text-md-left" data-aos="fade-in" data-aos-easing="linear" data-aos-delay="50">
                                    <div class="col-md-8">
                                        <h5 class="mb-1">{{ __('homepage.bestinword') }}</h5>
                                        <p class="mb-0">{{ __('homepage.variations') }}</p>
                                    </div>
                                    <div class="col-md-4 text-lg-right mt-md-0 mt-3">
                                        <a href="contact.html" class="btn btn btn-outline-light btn-pill">{{ __('homepage.quote') }}</a>
                                    </div>
                                </div> 
                    </div>
                </div> 
                
                <div class="wt-section pb-0">
                    <div class="container">
                        <div class="row justify-content-between align-items-center" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="50">
                            <div class="col-md-5"> 
                                <h2 class="mb-4">{{ __('homepage.leader') }}</h2>
                                <p class="text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eligendi fugiat!</p>
                            </div>
                            <div class="col-md-6">
                                <img src="assets/img/intro/img-woman-1.jpg" class="w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div> 

            @include('template.sections.our-clients')

    </main>            

@endsection

@section('footer')
    @include('template.parts.footer')
@endsection


@section('scripts')
    @include('template.parts.script')
@endsection