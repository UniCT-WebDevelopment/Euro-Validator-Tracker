@extends('layout')

@section('banner')

    <section class="hero-banner">
        <div class="container">
            <h2>{{ $note[0]->serial }} is 
            @if($note[0]->valid === 1)
                <span class="basecolor">valid</span>
            @else
                <span class="basecolor">not valid</span>
            @endif
            </h2>
        </div>
    </section>

    <section class="area-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if(isset($note[0]->zip))
                        @if($note[0]->valid == false)
                            <h4>To know what to do if the note is not valid read <a href="/learn#notValid">here</a></h4>
                        @endif
                        <h4>Its history <br /></h4>
                        <p>This note is recorded <span class="basecolor">{{ count($note) }}</span> times in the database.</p>
                        <table id="history">
                            <tr>
                                <th>Zip Code</th>
                                <th>Insert Time<span class="basecolor">*</span></th>
                            </tr>
                                @foreach($note as $n)
                                    <tr>
                                        <td>{{ $n->zip }}</td>
                                        <td>{{ $n->created_at }}</td>
                                    </tr>
                                @endforeach
                        </table>
                        <p><span class="basecolor">*</span>UTC time.</p>
                    @else
                        @if($note[0]->valid === 2)
                            <h4>It is not serial for Euro notes.</h4>
                            <p>Here there is an example of serial <br /><img class="center" src="{{ asset('img/serial.jpg') }}" alt="Example of serial"></p>
                        @else
                            <h4>This note is not tracked in the system; insert it <a href="/create">here</a> to track!</h4>
                            <img class="center" src="{{ asset('img/saving.jpg') }}" alt="Example of serial">
                        @endif     
                    @endif
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
