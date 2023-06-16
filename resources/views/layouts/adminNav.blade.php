@if(Auth::user()->role === 'admin')
    <div class="container">
        <div class="row">
            <div class="d-flex flex-row bd-highlight mb-3 bg-secondary p-2">
                <div class="p-2 bd-highlight">
                    <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm">Passengers</a>
                </div>
                <div class="p-2 bd-highlight">
                    <a href="{{ route('taxidrivers.index') }}" class="btn btn-primary btn-sm">Taxi Drivers</a>
                </div>
                <div class="p-2 bd-highlight">
                    <a href="/all_vehicles" class="btn btn-primary btn-sm">Vehicles</a>
                </div>
            </div>
        </div>
    </div>
@endif
