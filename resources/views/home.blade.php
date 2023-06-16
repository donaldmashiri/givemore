@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="d-flex flex-row bd-highlight mb-3 bg-primary p-2">
                <div class="p-2 bd-highlight">
                    <a href="{{ route('vehicles.index') }}" class="btn btn-primary btn-sm">Your Vehicles</a>
                </div>
                <div class="p-2 bd-highlight">
                    <a href="{{ route('taxidrivers.index') }}" class="btn btn-primary btn-sm">Notifications</a>
                </div>
            </div>
        </div>
    </div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Booked Reservation') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">User#</th>
                                    <td> 00{{ Auth::user()->id }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Name</th>
                                    <td> {{ Auth::user()->name }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Email</th>
                                    <td> {{ Auth::user()->email }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Phone</th>
                                    <td> {{ Auth::user()->phone }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Role</th>
                                    <td> {{ Auth::user()->role }}</td>
                                </tr>
                                </thead>
                            </table>
                        </div>
{{--                        <div class="card-footer text-center">--}}
{{--                            <a class="btn btn-primary" href="/profile">Go to Dashboard</a>--}}
{{--                        </div>--}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
