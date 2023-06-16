@extends('layouts.header')

@section('content')
    <!-- Start home-about Area -->

    <section class="contact-page-area mt-5">
        <div class="container">

            <div class="row">

                <div class="col-lg-12">
                    <h1 class="text-center">Your Booked Taxi</h1>

                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">

                            @if($books->count() > 0)
                                <table class="table table-bordered table-striped">
                                    <thead class="table">
                                    <tr>
                                        <th>#</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Date Time</th>
                                        <th>Vehicle</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($books as $book)
                                        <tr>
                                            <td>00{{ $book->id }}</td>
                                            <td>{{ $book->from_des }}</td>
                                            <td>{{ $book->to_des }}</td>
                                            <td>{{ $book->date_time }}</td>
                                            <td>{{ $book->vehicle->make }}</td>
                                            <td>{{ $book->vehicle_id }}</td>
                                            <td>
                                                @if($book->status === null)
                                                    <p class="text-danger">Pending</p>
                                                @elseif($vehicle->status === 'Taken')
                                                    <p class="text-success fw-bolder">{{ $book->status }}</p>
                                                @else
                                                    <p class="text-danger font-weight-bold">{{ $book->status }}</p>
                                                @endif
                                            </td>
{{--                                            <td>--}}
{{--                                                <form action="{{ route('vehicles.update', $vehicle->id) }}" method="POST" id="statusForm">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('PUT')--}}
{{--                                                    <button class="btn btn-success" name="status" value="Approved" type="submit">Approve</button>--}}
{{--                                                    <button class="btn btn-danger" name="status" value="Declined" type="submit">Decline</button>--}}
{{--                                                </form>--}}
{{--                                            </td>--}}
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <h1 class="text-center alert alert-danger">You havent Booked</h1>
                            @endif

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- End home-calltoaction Area -->
@endsection






