@extends('layouts.header')

@section('content')
    <!-- Start home-about Area -->

    <section class="contact-page-area mt-5">
        <div class="container">

            <div class="row">

                <div class="col-lg-12">
                    <div class="col-lg-10  col-md-10 header-right">
                        <h4 class="pb-30">Book Your Texi Online!</h4>
                        <h4 class="alert alert-success">Successfully Booked</h4>
                        <form class="form">
                            <div class="form-group">
                                <div class="default-select" id="default-select">
                                    <select style="display: none;">
                                        <option value="" disabled="" selected="" hidden="">From Destination</option>
                                        <option value="1">Destination One</option>
                                        <option value="2">Destination Two</option>
                                        <option value="3">Destination Three</option>
                                    </select><div class="nice-select" tabindex="0"><span class="current">From Destination</span><ul class="list"><li data-value="" class="option selected disabled">From Destination</li><li data-value="1" class="option">Destination One</li><li data-value="2" class="option">Destination Two</li><li data-value="3" class="option">Destination Three</li></ul></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="default-select" id="default-select2">
                                    <select style="display: none;">
                                        <option value="" disabled="" selected="" hidden="">To Destination</option>
                                        <option value="1">Destination One</option>
                                        <option value="2">Destination Two</option>
                                        <option value="3">Destination Three</option>
                                    </select><div class="nice-select" tabindex="0"><span class="current">To Destination</span><ul class="list"><li data-value="" class="option selected disabled">To Destination</li><li data-value="1" class="option">Destination One</li><li data-value="2" class="option">Destination Two</li><li data-value="3" class="option">Destination Three</li></ul></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group dates-wrap">
                                    <input id="datepicker2" class="dates form-control hasDatepicker" placeholder="Date &amp; time" type="text">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">

                                <button class="btn btn-default btn-lg btn-block text-center text-uppercase">Book Taxi</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- End home-calltoaction Area -->
@endsection






