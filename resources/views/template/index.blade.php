<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<head>
@section('head')  
    <title>NeuBizz | Bootstrap 4 Template by WebThemez</title>
    <!-- Meta -->
    <meta name="keywords" content="Bootstrap Theme, Freebies, UI Kit, MIT license">
    <meta name="description" content="Bootstrap 4 Template by WebThemez">
    <meta name="author" content="webthemez.com">
    @show
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
@section('styles')
@include('template.parts.styles')
@show

</head>  
  <body>

    @include('template.parts.top-contacts')

<!-- Header -->
    @include('template.parts.header')
<!-- End Header -->

    @yield('content')

    


    <main role="main">
        
        


    </main>

    <!-- Footer --> 
        @yield('footer')
    <!-- End Footer --> 
	
    <!-- JS Script Files -->
        @yield('scripts')
        @stack('addscript')
    <!-- END JAVASCRIPTS -->
  </body> 
</html>