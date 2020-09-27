<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>€ Validator&Tracker</title>

        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/themify-icons.css">
        <link rel="stylesheet" href="/css/flaticon.css">
        <link rel="stylesheet" href="/vendors/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="/vendors/animate-css/animate.css">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">   

    </head>
    <body>

    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    
                   <a class="navbar-brand logo_h" href="/"><img src="img/logo.png" alt="" id="logo"></a>
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

   <!-- 
        
        <div class="col-m-12 col-12 hero" id="home" data-opacity data-flip>
            <div class="row" data-flip>
                <div class="col-m-6 col-3 card check">
                @yield('serial')
                </div>
            </div>
        </div>

       
        <div class="col-m-12 col-12 learn" id="learn">
            <h1 class="title">Learn More</h1>
            <p>Some Text</p>
            <p>Other Some Text</p>
        </div>


        <div class="col-m-12 col-12 footer">
            <div class="icon">
                <a href="https://github.com/ausilianapoli">
                    <svg class="yellow-icon" enable-background="new 0 0 24 24" height="32" viewBox="0 0 24 24" width="32" xmlns="http://www.w3.org/2000/svg">
                        <path d="m.184 10.462c-.779 4.906 1.401 10.823 8.123 13.006.12.022.231.032.335.032.782 0 1.32-.582 1.32-1.3-.097-.523.383-2.642-.92-2.357-2.519.536-2.821-.871-3.205-1.607 1.086 1.394 2.718 1.359 3.949.819.683-.3.326-1.064.65-1.343.496-.426.244-1.243-.407-1.314-2.314-.255-4.457-1.001-4.457-4.702 0-2.168 1.505-2.362 1.09-3.269-.015-.033-.333-.754-.045-1.849 1.419.262 2.072 1.28 2.753 1.097 1.687-.46 3.544-.46 5.23 0 .704.189 1.207-.801 2.738-1.103.441 1.654-.473 2.058.103 2.677.632.68.953 1.503.953 2.447 0 5.564-4.717 3.957-5.101 5.22-.088.288.005.599.235.792.61.513.53 1.83.465 2.889-.067 1.098-.125 2.045.482 2.579.214.19.595.393 1.284.253 6.634-2.131 8.83-8.022 8.063-12.917-2.096-13.368-21.526-13.352-23.638-.05zm8.27 10.978.004.505c-.523-.181-1.015-.39-1.475-.623.425.109.913.156 1.471.118zm.37-3.7c-.005.026-.01.053-.015.08-.853.252-1.509.001-1.957-.752 0-.001 0-.001-.001-.002.68.364 1.381.56 1.973.674zm3.176-15.74c11.833 0 14.502 16.267 3.469 19.941-.038-.297-.003-.857.021-1.252.058-.951.126-2.059-.213-2.985 5.088-1.059 5.513-6.646 3.554-9.135.243-.952.145-3.189-.729-3.463-.206-.065-1.305-.304-3.437 1.037-1.741-.416-3.62-.417-5.361 0-1.064-.667-3.462-1.752-3.922-.6-.534 1.342-.407 2.427-.248 3.03-1.739 2.204-1.218 5.894.534 7.626-.993-.475-2.361-.637-2.656.314-.323 1.037.912.911 1.679 2.804.073.236.208.513.415.788-6.811-5.565-3.525-18.105 6.894-18.105z"/>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/maria-ausilia-napoli-spatafora-b529b036/">
                    <svg class="yellow-icon" enable-background="new 0 0 24 24" height="32" viewBox="0 0 24 24" width="32" xmlns="http://www.w3.org/2000/svg">
                        <path d="m18.59 24c.103 0 4.762-.001 4.66-.001.414 0 .75-.336.75-.75-.35-7.857 1.842-16.148-6.338-16.148-1.573 0-2.826.537-3.729 1.247 0-1.461-1.579-.653-5.224-.87-.414 0-.75.336-.75.75.302 14.166-.674 15.771.75 15.771h4.66c1.353 0 .492-1.908.75-8.188 0-2.594.75-3.102 2.046-3.102 1.434 0 1.675.996 1.675 3.228.257 6.167-.598 8.063.75 8.063zm-2.425-12.791c-4.491 0-3.546 4.938-3.546 11.29h-3.16v-13.521h2.974v1.298c0 .72 1.097 1.074 1.479.35.492-.934 1.77-2.025 3.75-2.025 3.527 0 4.838 1.733 4.838 6.396v7.503h-3.16c0-7.144.756-11.291-3.175-11.291z"/><path d="m1.122 7.479c-1.42 0-.448 1.585-.75 15.771 0 .414.336.75.75.75h4.665c1.42 0 .448-1.585.75-15.771 0-1.295-1.881-.531-5.415-.75zm3.915 15.021h-3.165v-13.521h3.165z"/><path d="m3.452 0c-4.576 0-4.548 6.929 0 6.929 4.545 0 4.581-6.929 0-6.929zm0 5.429c-2.568 0-2.592-3.929 0-3.929 2.597 0 2.564 3.929 0 3.929z"/>
                    </svg>
                </a>
                <p class="copyright">&copy Copyright 2020</p>
            </div>
        </div> 

-->

    </body>
</html>
