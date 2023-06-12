@extends('layouts.app')

@section('content')
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

                        <table class="table table-bordered table-striped">
                            <thead class="table">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>From Destination</th>
                                <th>To Destination</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>johndoe@example.com</td>
                                <td>CBD</td>
                                <td>Rutendo</td>
                                <td>2023-06-10</td>
                            </tr>
                            <tr>
                                <td>Jane Smith</td>
                                <td>janesmith@example.com</td>
                                <td>Mkoba</td>
                                <td>Lundi</td>
                                <td>2023-06-15</td>
                            </tr>
                            <!-- Add more rows as needed -->
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
