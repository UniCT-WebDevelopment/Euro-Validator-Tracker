<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png">
        <title>€ Validator&Tracker</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendors/fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendors/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendors/animate-css/animate.css') }}">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">   

    </head>
    <body>

    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    
                   <a class="navbar-brand logo_h" href="/"><img src="{{ asset('img/logo.png') }}" alt="Logo" id="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="/">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="/learn">Learn More</a></li> 
                            <li class="nav-item"><a class="nav-link" href="/create">Try</a></li> 
                        </ul>
                    </div> 
                    </div> 
                </div>
            </nav>

        </div>
    </header>

    @yield('banner')

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/stellar.js') }}"></script>
    <script src="{{ asset('vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>

    </body>
</html>
