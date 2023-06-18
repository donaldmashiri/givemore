@extends('layouts.header')

@section('content')
    <!-- Start home-about Area -->

    <section class="contact-page-area mt-5">
        <div class="container">

            <div class="row">

                <div class="col-lg-12">
                    <div class="col-lg-10  col-md-10 header-right">
                        <h4 class="pb-30">Book Your Taxi Online!</h4>

                        <h4>
                            @include('partials.errors')
                        </h4>
                        <form class="form" method="POST" action="{{ route('booktaxis.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="default-select" id="default-select">
                                    <select style="display: none; background-color: white" name="from_des">
                                        <option value="" disabled="" selected="" hidden="">From Destination</option>
                                        <option value="1">Gweru CBD</option>
                                        <option value="2">MKoba</option>
                                        <option value="3">Mambo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="default-select" id="default-select2">
                                    <select style="display: none;" background-color: white name="to_des">
                                        <option value="" disabled="" selected="" hidden="">To Destination</option>
                                        <option value="1">Gweru CBD</option>
                                        <option value="2">MKoba</option>
                                        <option value="3">Mambo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group dates-wrap">
                                    <input style="background-color: white" id="datepicker2" name="date_time" class="dates form-control hasDatepicker" placeholder="Date &amp; time" type="datetime-local">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="default-select" id="default-select3">
                                    <select style="display: none; background-color: white" name="vehicle_id">
                                        <option value="" disabled="" selected="" hidden="">Available Taxi</option>
                                        @foreach($vehicles as $vehicle)
                                            <option value="{{ $vehicle->id }}">{{ $vehicle->make }} ({{ $vehicle->model }})</option>
                                        @endforeach
                                    </select>
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






