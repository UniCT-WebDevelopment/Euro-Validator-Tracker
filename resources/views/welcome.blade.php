@extends('layout')

@section('banner')

    <section class="home_banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content">
                    <h1>Check your <br>
                        <span class="basecolor">Euro</span> <br> 
                    Notes</h1>
                </div>
            </div>
        </div>
        <div class="social_area">
            <h4>
                <a href="https://www.linkedin.com/in/maria-ausilia-napoli-spatafora-b529b036/"><i class="ti-linkedin"></i>Linkedin</a>
            </h4>
            <div class="round"></div>
            <h4>
                <a class="twitter" href="https://github.com/ausilianapoli"><i class="ti-github"></i>Github</a>
            </h4>
            <div></div></div>
    </section>

    <section class="area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <p>Counterfeiting, which according to Italian law (and not only) constitutes a crime, is a phenomenon to which central banks pay the utmost attention since, if not kept under control, it can undermine public confidence in the currency, putting its integrity at risk.
                    <br />
                    This website offers unofficial service to verify the genuineness of Euro notes analyzing only their serial.
                    </p>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('img/notes-in-hands.jpg') }}" alt="Some notes in hands" id="welcomeImg">
                </div>   
            </div>
        </div>
    </section>

    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <p class="footer-text">Be social with 
                        <a href="https://www.linkedin.com/in/maria-ausilia-napoli-spatafora-b529b036/"><i class="ti-linkedin"></i></a> 
                        <a class="twitter" href="https://github.com/ausilianapoli"><i class="ti-github"></i></a>
                    </p>
                </div>
            </div>
        </div>    
    </footer>

@endsection('banner')