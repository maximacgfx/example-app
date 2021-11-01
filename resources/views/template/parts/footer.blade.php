<footer class="wt-section bg-dark main-footer">
    <div class="container">
    <div class="row">
    <div class=" col-sm-4 col-md col-sm-4 col-12 col mb-4">
    <h5 class="mb-4">{{ __('homepage.reachus') }}</h5>

    <p><i class="fa fa-location-arrow mr-2"></i>{!! __('homepage.address') !!}</p>
    <p><i class="fa fa-phone mr-2"></i><a href="tel:{{ config('company.office-phone')}}">{{ config('company.office-phone')}}</a></p>
    <p><i class="fa fa fa-envelope mr-2"></i><a href="mailto:{{ config('company.email')}}">{{ config('company.email')}}</a></p>


    </div>


    <div class="col-sm-4 col-md  col-6 col mb-4">
    <h5 class="mb-4">{{ __('homepage.sitelinks') }}</h5>

    <ul class="list-inline">
    <li class="list-block-item mx-2"><a href="{{ route('home') }}">{{ __('menu.home') }}</a></li>
    <li class="list-block-item mx-2"><a href="{{ route('about') }}">{{ __('menu.about') }}</a></li>
    <li class="list-block-item mx-2"><a href="{{ route('services') }}">{{ __('menu.services') }}</a></li>
    <li class="list-block-item mx-2"><a href="{{ route('portfolio') }}">{{ __('menu.portfolio') }}</a></li>
    <li class="list-block-item mx-2"><a href="{{ route('pricing') }}">{{ __('menu.pricing') }}</a></li>
    </ul>

    </div>


    <div class="col-sm-4 col-md  col-6 col mb-4">
    <h5 class="mb-4">{{ __('homepage.quicklinks') }}</h5>

    <ul class="list-inline">
    <li class="list-block-item mx-2"><a href="{{ route('news') }}">{{ __('menu.blog') }}</a></li>
    <li class="list-block-item mx-2"><a href="{{ route('contacts') }}">{{ __('menu.contacts') }}</a></li>
    <li class="list-block-item mx-2"><a href="{{ route('home') }}">{{ __('menu.policy') }}</a></li>
    <li class="list-block-item mx-2"><a href="http://webthemez.com">{{ __('menu.terms') }}</a></li>
    </ul>

    </div>


    <div class="col-sm-4 col-md  col-12 col mb-4">
    <h5 class="mb-4"> {{ __('homepage.followus') }}</h5>
    <ul class="social_footer_ul list-inline text-left mb-0">
    <li class="list-inline-item mx-2"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
    <li class="list-inline-item mx-2"><a href="#"><i class="fab fa-twitter"></i></a></li>
    <li class="list-inline-item mx-2"><a href="#"><i class="fab fa-linkedin"></i></a></li>
    <li class="list-inline-item mx-2"><a href="#"><i class="fab fa-instagram"></i></a></li>
    </ul>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12 pt-4">

    <p class="text-center copyrights"><a class="text-white" href="https://webthemez.com/free-bootstrap-templates/">Bootstrap Theme</a> by WebThemez. <br>© {{ __('menu.rights') }}</p>
    </div>
    </div>
    </div>
    </footer>
