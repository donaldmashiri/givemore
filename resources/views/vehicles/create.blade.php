@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="d-flex flex-row bd-highlight mb-3 bg-primary p-2">
                <div class="p-2 bd-highlight">
                    <a href="{{ route('vehicles.index') }}" class="btn btn-primary btn-sm">Your Vehicles</a>
                </div>
                <div class="p-2 bd-highlight">
                    <a href="{{ route('vehicles.create') }}" class="btn btn-primary btn-sm">Notifications</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h1 class="text-center">Notifications</h1>
                    @include('partials.errors')

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
                                    <th></th>
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
                                        <td>
                                            <form action="{{ route('booktaxis.update', $book->id) }}" method="POST" id="statusForm">
                                                @csrf
                                                @method('PUT')
                                                <button class="btn btn-success" name="status" value="Taken" type="submit">Take Job</button>
                                                <button class="btn btn-danger" name="status" value="Taken" type="submit">Reject</button>
                                            </form>
                                        </td>

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
@endsection
