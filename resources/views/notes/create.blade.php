@extends('layout')

@section('banner')

    <section class="hero-banner">
        <div class="container">
            <h2>Insert your <span class="basecolor">Note</span></h2>
        </div>
    </section>

    <section class="area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h4 class="error-msg">{{ session('error-msg') }}</h4>
                    <form method="post" action="/note">
                        @csrf
                        <label for="serial">Serial Number</label>
                        <input class="form-control" type="text" id="serial" name="serial" placeholder="YA0206666666">
                        <br />
                        <label for="value">Value</label>
                        <select class="form-control" name="value" id="value">
                            <option value="5">5€</option>
                            <option value="10">10€</option>
                            <option value="20">20€</option>
                            <option value="50">50€</option>
                            <option value="100">100€</option>
                            <option value="200">200€</option>
                            <option value="500">500€</option>
                        </select>
                        <br />
                        <label for="zip">Zip Code</label>
                        <input class="form-control" type="text" id="zip" name="zip" placeholder="95100">
                        <br />
                        <input class="button button-contactForm" type="submit" value="submit">
                    </form>
                </div> 
                <div class="col-lg-4">
                    <img src="{{ asset('img/serial.jpg') }}" alt="Example of serial number">
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


