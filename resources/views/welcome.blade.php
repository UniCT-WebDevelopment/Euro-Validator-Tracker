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
                <a href="#"><i class="ti-instagram"></i>Instagram</a>
            </h4>
            <div class="round"></div>
            <h4>
                <a class="twitter" href="#"><i class="ti-twitter"></i>Twitter</a>
            </h4>
            <div class="round"></div>
            <h4>
                <a href="#"><i class="ti-facebook"></i>Facebook</a>
            </h4>
            <div></div></div>
    </section>

<!--
<h1 class="title">Check Your Euro Note</h1>
<p class="button"><a href="/create">Try</a></p>
<br />
<p class="button"><a href="#learn">Learn More</a></p>
-->

@endsection('banner')