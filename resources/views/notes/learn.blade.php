@extends('layout')

@section('banner')

    <section class="hero-banner">
        <div class="container">
            <h2><span class="basecolor">Learn</span> More</h2>
        </div>
    </section>

    <section class="area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <p>Euro (€) is the currency of the euro area and has been in circulation since 2002. The banknotes of the euro are issued by the national central banks of the Eurosystem or the European Central Bank. <br />
                    The euro notes contain many complex security features such as serial number, watermarks, invisible ink characteristics, holograms, optically variable inks and microprinting that document their authenticity. <br />
                    There are two series of euro banknotes:</p>
                    <ol>
                        <li>1st series issued from 2002;</li>
                        <li>2st series or Europa series issued from 2013.</li>
                    </ol>
                    <p>Each note has a unique serial number of 12 characters:</p>
                    <ol>
                        <li>1st series notes have a letter as first character (that specifies the country of issue) and 11 digits;</li>
                        <li>2st series notes have a letter as first character such as 1st series, but 10 digits because the second char is also letter in order to increment combinations.</li>
                    </ol>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('img/some-notes.jpg') }}" alt="Some Euro notes">
                </div>    
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img src="{{ asset('img/euro.jpg') }}" alt="Euro symbol">
                </div>
                <div class="col-lg-8">
                    <p>Each country (i.e. first char) has a control code (for example the letter of Italy is 'S' and its control code is 7) and the sum of all digits and the ASCII of the second letter for Europa series until the result is less than 9 (i.e. the root), must be equals to control code in order to pass the checksum.
                    <br />
                    For example:</p>
                    <ol>
                        <li><it>SA2160296285</it> is the serial number;</li>
                        <li><it>'S'</it> specifies the country and, particularly, Italy with control code equals to <it>7</it>;</li>
                        <li>the ASCII of <it>A</it> is <it>65</it>;</li>
                        <li>the sum is: 6+5+2+1+6+0+2+9+6+2+8+5=52 -> 5+2=7;</li>
                        <li>the obtained root coincides with the control code.</li>
                    </ol>
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
