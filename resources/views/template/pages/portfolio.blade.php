@extends('template.index')


@section('head')
    <title>Hasyl | Portfolio Page</title>
    <!-- Meta -->
    <meta name="description" content="Адреса и контакты Hasyl Cesmesi">
    <meta name="author" content="HasylDigital">
@endsection

@section('styles')
        @include('template.parts.styles2')
@endsection


@section('header')
    @include('template.parts.header')
@endsection

@section('content')
  
    @include('template.sections.portfolio')
    <main role="main">

            <section class="wt-section"> 
                    <div class="container">
                           <div class="row justify-content-md-center text-center pb-lg-5">
                               <div class="col-md-12">
                                   <h2 class="h1">Our Works Tells More..</h2>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, </p>
                               </div>
                           </div>
                            <div class="portfolio-menu mt-2 mb-4 pb-3">
                               <ul>
                                  <li class="btn btn-pill mr-2 active" data-filter="*">All</li>
                                  <li class="btn btn-pill mr-2" data-filter=".gts">Finance</li>
                                  <li class="btn btn-pill mr-2" data-filter=".lap">Tech</li>
                                  <li class="btn btn-pill" data-filter=".selfie">CMS</li>
                               </ul>
                            </div>
                            <div class="portfolio-item row">
                               <div class="item gts col-lg-3 col-md-4 col-6 col-sm"> 
                                   <div class="hovereffect">
                                       <img class="img-fluid img-responsive" src="assets/img/portfolio/img1.jpg" alt="">
                                           <div class="overlay"> 
                                               <p>
                                                   <a href="assets/img/portfolio/img1.jpg" class="fancylight popup-btn info" data-fancybox-group="light">My Profile
                                                   <i>View</i></a>
                                               </p>
                                           </div>
                                       </div> 
                                   
                               </div> 
                                   <div class="item selfie col-lg-3 col-md-4 col-6 col-sm"> 
                                   <div class="hovereffect">
                                       <img class="img-fluid img-responsive" src="assets/img/portfolio/img2.jpg" alt="">
                                           <div class="overlay"> 
                                               <p>
                                                   <a href="assets/img/portfolio/img2.jpg" class="fancylight popup-btn info" data-fancybox-group="light">My Profile
                                                   <i>View</i></a>
                                               </p>
                                           </div>
                                       </div> 
                                   
                               </div> 
                                       <div class="item lap col-lg-3 col-md-4 col-6 col-sm"> 
                                   <div class="hovereffect">
                                       <img class="img-fluid img-responsive" src="assets/img/portfolio/img3.jpg" alt="">
                                           <div class="overlay"> 
                                               <p>
                                                   <a href="assets/img/portfolio/img3.jpg" class="fancylight popup-btn info" data-fancybox-group="light">My Profile
                                                   <i>View</i></a>
                                               </p>
                                           </div>
                                       </div> 
                                   
                               </div>
                                       <div class="item selfie col-lg-3 col-md-4 col-6 col-sm"> 
                                   <div class="hovereffect">
                                       <img class="img-fluid img-responsive" src="assets/img/portfolio/img4.jpg" alt="">
                                           <div class="overlay"> 
                                               <p>
                                                   <a href="assets/img/portfolio/img4.jpg" class="fancylight popup-btn info" data-fancybox-group="light">My Profile
                                                   <i>View</i></a>
                                               </p>
                                           </div>
                                       </div> 
                                   
                               </div> 
                                       <div class="item lap col-lg-3 col-md-4 col-6 col-sm"> 
                                   <div class="hovereffect">
                                       <img class="img-fluid img-responsive" src="assets/img/portfolio/img5.jpg" alt="">
                                           <div class="overlay"> 
                                               <p>
                                                   <a href="assets/img/portfolio/img5.jpg" class="fancylight popup-btn info" data-fancybox-group="light">My Profile
                                                   <i>View</i></a>
                                               </p>
                                           </div>
                                       </div> 
                                   
                               </div> 
                                       <div class="item gts col-lg-3 col-md-4 col-6 col-sm"> 
                                   <div class="hovereffect">
                                       <img class="img-fluid img-responsive" src="assets/img/portfolio/img6.jpg" alt="">
                                           <div class="overlay"> 
                                               <p>
                                                   <a href="assets/img/portfolio/img6.jpg" class="fancylight popup-btn info" data-fancybox-group="light">My Profile
                                                   <i>View</i></a>
                                               </p>
                                           </div>
                                       </div> 
                                   
                               </div> 
                                       <div class="item gts col-lg-3 col-md-4 col-6 col-sm"> 
                                   <div class="hovereffect">
                                       <img class="img-fluid img-responsive" src="assets/img/portfolio/img7.jpg" alt="">
                                           <div class="overlay"> 
                                               <p>
                                                   <a href="assets/img/portfolio/img7.jpg" class="fancylight popup-btn info" data-fancybox-group="light">My Profile
                                                   <i>View</i></a>
                                               </p>
                                           </div>
                                       </div> 
                                   
                               </div> 
                                       <div class="item selfie col-lg-3 col-md-4 col-6 col-sm"> 
                                   <div class="hovereffect">
                                       <img class="img-fluid img-responsive" src="assets/img/portfolio/img8.jpg" alt="">
                                           <div class="overlay"> 
                                               <p>
                                                   <a href="assets/img/portfolio/img8.jpg" class="fancylight popup-btn info" data-fancybox-group="light">My Profile
                                                   <i>View</i></a>
                                               </p>
                                           </div>
                                       </div> 
                                   
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
        <!-- Global Vendor -->
        <script src="assets/vendors/jquery.min.js"></script>
        <script src="assets/vendors/jquery.migrate.min.js"></script>
        <script src="assets/vendors/popper.min.js"></script>
        <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/vendors/aos/aos.js"></script>
    
        <!-- Components Vendor  --> 
        <script src="assets/vendors/slick-carousel/slick.min.js"></script>
        <script src="assets/vendors/ace-responsive-menu/ace-responsive-menu.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
        <script src="assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
    
        <!--Plugin Initialize-->
        <script src="assets/js/global.js"></script> 
        <script src="assets/js/portfolio.js"></script> 
        <!-- Theme Components and Settings --> 
        <script src="assets/vendors/carousel.js"></script> 
@endsection

