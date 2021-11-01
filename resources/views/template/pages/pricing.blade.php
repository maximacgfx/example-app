@extends('template.index')


@section('head')
    <title>Hasyl | Pricing Page</title>
    <!-- Meta -->
    <meta name="description" content="Адреса и контакты Hasyl Cesmesi">
    <meta name="author" content="HasylDigital">
@endsection

@section('header')
    @include('template.parts.header')
@endsection

@section('content')
    @include('template.sections.pricing')

<main role="main">
    <div class="wt-section bg-light">
        <div class="container">
            <div class="row justify-content-center align-items-center text-center pb-lg-5">
                <div class="col-md-8"> 
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias aliquid delectus, dolor
                        doloremque enim eos est fugit inventore ipsam iure laudantium molestiae.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card text-center mb-md-0 mb-3">
                        <div class="card-body py-5">
                            <div class="pricing-header mb-5">
                                <h5 class="font-weight-normal mb-3">Free</h5>
                                <h1>$0</h1>
                                <p class="text-muted">Single License</p>
                            </div>
                            <strong>Includes:</strong>
                            <ul class="list-unstyled mt-3 price-options">
                                <li>- Single Site</li>
                                <li>- Cloud Storage</li>
                                <li>- 1 UI Template</li>
                                <li>- No Support</li>
                            </ul>
                            <a href="#" class="btn btn-pill btn-outline-primary mt-3">Download Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center mb-md-0 mb-3">
                        <div class="card-body py-5">
                            <div class="pricing-header mb-5">
                                <h5 class="font-weight-normal mb-3">Basic</h5>
                                <h1>$12</h1>
                                <p class="text-muted">Multi License</p>
                            </div>
                            <strong>Includes:</strong>
                            <ul class="list-unstyled lh-45 mt-3 price-options">
                                <li>- Multi Site</li>
                                <li>- Cloud Storage</li>
                                <li>- 3 UI Template</li>
                                <li>- Limited Support</li>
                            </ul>
                            <a href="#" class="btn btn-pill btn-primary mt-3">Download Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center mb-md-0 mb-3">
                        <div class="card-body py-5">
                            <div class="pricing-header mb-5">
                                <h5 class="font-weight-normal mb-3">Premium</h5>
                                <h1>$39</h1>
                                <p class="text-muted">Extended License</p>
                            </div>
                            <strong>Includes:</strong>
                            <ul class="list-unstyled lh-45 mt-3 price-options">
                                <li>- Unlimited Site</li>
                                <li>- Unlimited Storage</li>
                                <li>- Unlimited Templates</li>
                                <li>- Full Support</li>
                            </ul>
                            <a href="#" class="btn btn-pill btn-outline-primary mt-3">Download Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	

                
    @include('template.sections.faq')
</main>  
    
@endsection

@section('footer')
    @include('template.parts.footer')
@endsection


@section('scripts')
    @include('template.parts.script')
@endsection


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