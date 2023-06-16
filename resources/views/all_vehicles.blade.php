@extends('layouts.app')

@section('content')

    @include('layouts.adminNav')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h1 class="text-center">All Vehicles</h1>
                    @include('partials.errors')
                    <div class="card-body">

                        @if($vehicles->count() > 0)
                            <table class="table table-bordered table-striped">
                                <thead class="table">
                                <tr>
                                    <th>#</th>
                                    <th>User Details</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Year</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($vehicles as $vehicle)
                                    <tr>
                                        <td>00{{ $vehicle->id }}</td>
                                        <td>{{ $vehicle->user->name }}</td>
                                        <td>{{ $vehicle->make }}</td>
                                        <td>{{ $vehicle->model }}</td>
                                        <td>{{ $vehicle->year }}</td>
                                        <td>{{ $vehicle->plate_number }}</td>
                                        <td>{{ $vehicle->engine_number }}</td>
                                        <td>
                                            @if($vehicle->status === null)
                                                <p class="text-danger">Not Yet Approved</p>
                                            @elseif($vehicle->status === 'Approved')
                                                <p class="text-success fw-bolder">{{ $vehicle->status }}</p>
                                            @else
                                                <p class="text-danger font-weight-bold">{{ $vehicle->status }}</p>
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ route('vehicles.update', $vehicle->id) }}" method="POST" id="statusForm">
                                                @csrf
                                                @method('PUT')
                                                <button class="btn btn-success" name="status" value="Approved" type="submit">Approve</button>
                                                <button class="btn btn-danger" name="status" value="Declined" type="submit">Decline</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <h1 class="text-center alert alert-danger">No Vehicles have been submited for Evaluation</h1>
                        @endif

                    </div>
                </div>
            </div>



            <!-- Modal -->
            <div class="modal fade" id="markings" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title " id="staticBackdropLabel">Add Vehicle</h5>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{ route('vehicles.store') }}">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="row mb-3">

                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Make') }}</label>

                                    <div class="col-md-6">
                                        <input id="make" type="text" class="form-control @error('make') is-invalid @enderror" name="make" value="{{ old('make') }}" required autocomplete="make" autofocus>

                                        @error('make')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="model" class="col-md-4 col-form-label text-md-end">{{ __('Model') }}</label>

                                    <div class="col-md-6">
                                        <input id="model" type="text" class="form-control @error('model') is-invalid @enderror" name="model" value="{{ old('model') }}" required autocomplete="model">

                                        @error('model')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="year" class="col-md-4 col-form-label text-md-end">{{ __('Year') }}</label>

                                    <div class="col-md-6">
                                        <input id="year" type="text" class="form-control @error('year') is-invalid @enderror" name="year" value="{{ old('year') }}" required autocomplete="national_id">

                                        @error('year')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="engine_number" class="col-md-4 col-form-label text-md-end">{{ __('Engine Number') }}</label>

                                    <div class="col-md-6">
                                        <input id="engine_number" type="text" class="form-control @error('engine_number') is-invalid @enderror" name="engine_number" value="{{ old('engine_number') }}" required autocomplete="engine_number">

                                        @error('engine_number')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="plate_number" class="col-md-4 col-form-label text-md-end">{{ __('Plate Number') }}</label>

                                    <div class="col-md-6">
                                        <input id="plate_number" type="text" class="form-control @error('plate_number') is-invalid @enderror" name="plate_number" value="{{ old('plate_number') }}" required autocomplete="plate_number">

                                        @error('plate_number')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Submit') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
