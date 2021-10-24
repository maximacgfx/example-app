<!-- Icon Block -->
<section class="wt-section bg-light">
        <div class="container">
        <div class="row justify-content-center align-items-center text-center pb-lg-5">
                <div class="col-md-8"> 
                   {{ $slot }}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0 text-center">
                <div class="contactIcons text-primary mb-2">
                    <i class="fa fa-location-arrow"></i>
                </div>
                <h3 class="h5">Address</h3>
                <p class="mb-0">132 Manhatten Str., NewYork, US</p>
                </div>
    
                <div class="col-lg-4 mb-5 mb-lg-0 text-center">
                <div class="contactIcons text-primary mb-2">
                    <i class="fa fa-phone"></i>
                </div>
                <h3 class="h5">Phone Number</h3>
                <p class="mb-0">1-234-567-2401</p>
                </div>
    
                <div class="col-lg-4 mb-5 mb-lg-0 text-center">
                <div class="contactIcons text-primary mb-2">
                    <i class="fa fa fa-envelope"></i>
                </div>
                <h3 class="h5">Email</h3>
                <p class="mb-0">mail@webthemez.com</p>
                </div>
            </div>
            <div class="row justify-content-center align-items-center text-center pb-lg-5">
                    <div class="col-md-8"> 
                       {!! $down !!}
                    </div>
                </div>
        </div>
</section>
<!-- End Icon Block -->