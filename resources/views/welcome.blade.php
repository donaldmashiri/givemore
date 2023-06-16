@extends('layouts.header')

@section('content')
    <!-- Start home-about Area -->
    <section class="home-about-area section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 about-left">
                    <img class="img-fluid" src="{{ asset('img/about-img.jpg') }}" alt="">
                </div>
                <div class="col-lg-6 about-right">
                    <h1>ONLINE PIRATE TAXI MONITORING SYSTEM</h1>
                    <p>online system that seeks to ensure safety of both taxi drivers and passengers onboard pirate taxis. The system also ensures convenience in the way the pirate taxis are operated </p>
                    <a class="text-uppercase primary-btn" href="/register">Register</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End home-about Area -->


    <!-- End home-calltoaction Area -->
@endsection






