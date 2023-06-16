@extends('layouts.app')

@section('content')

    @include('layouts.adminNav')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h1 class="text-center">All Passengers Drivers</h1>

                    <div class="card-body">
                        @if($users->count() > 0)
                            <table class="table table-bordered table-striped">
                                <thead class="table">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $user->image) }}" alt="" width="100" height="60">
                                        </td>
                                        <td>{{ $user->role }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->created_at }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <h1 class="">No Taxi Drivers Found</h1>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
