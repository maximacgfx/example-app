@extends('template.index')


@section('head')
    <title>Hasyl | About Page</title>
    <!-- Meta -->
    <meta name="description" content="О компании Hasyl Cesmesi">
    <meta name="author" content="HasylDigital">
@endsection

@section('header')
    @include('template.parts.header')
@endsection

@section('content')
    @include('template.sections.about-us')

    <main role="main">

            <div class="wt-section pb-0">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-md-5">
                                <h5 class="text-primary">{{ __('menu.about')}}</h5>
                                <h2 class="mb-4">{{ __('homepage.tech_leader')}}</h2>
                                <p class="text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eligendi fugiat labore libero molestias provident quae quaerat quis! Aspernatur at enim excepturi facere in non reiciendis soluta
                                    totam, voluptas voluptate!</p>
                            </div>
                            <div class="col-md-6">
                                <img src="assets/img/intro/img-woman-1.jpg" class="w-75" alt="">
                            </div>
                        </div>
                    </div>
                </div>

    @include('template.sections.mission-vision-values')
    @include('template.sections.our-team')
    @include('template.sections.best-solutions')
    @include('template.sections.our-clients')


{{--
        @include('template.sections.our-services')

        @include('template.sections.all-solutions')

        @include('template.sections.top-consulting')


        @include('template.sections.our-clients')

        @include('template.sections.mission-vision-values')

        @include('template.sections.our-team')

        @include('template.sections.best-solutions')


            --}}

    </main>

@endsection

@section('footer')
    @include('template.parts.footer')
@endsection


@section('scripts')
    @include('template.parts.script')
@endsection
