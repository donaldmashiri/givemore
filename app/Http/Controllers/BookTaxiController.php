<?php

namespace App\Http\Controllers;

use App\Models\BookTaxi;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Auth;

class BookTaxiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = BookTaxi::where('user_id', Auth::user()->id)->get();
        return view('booktaxis.index')->with('books', $books);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehicles = Vehicle::where('status', 'Approved')->get();
        return view('booktaxis.create')->with('vehicles', $vehicles);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'from_des' => ['required', 'string', 'max:255'],
            'to_des' => ['required', 'string', 'max:255'],
            'vehicle_id' => ['required', 'string', 'max:255'],
            'date_time' => ['required', 'string', 'max:255'],
        ]);

        BookTaxi::create([
            "user_id" => Auth::user()->id,
            "from_des" => request('from_des'),
            "to_des" => request('to_des'),
            "vehicle_id" => request('vehicle_id'),
            "plate_number" => request('plate_number'),
            "date_time" => request('date_time'),
        ]);

        return redirect()->back()->with('success', 'Successfully Booked');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $apply = BookTaxi::findOrFail($id);
        $apply->status = $request->input('status');
        $apply->save();

        if ($apply->status === 'Taken') {
            $vehicle = Vehicle::findOrFail($apply->vehicle_id); // Use the appropriate column name for vehicle ID
            $vehicle->statusAvailable = 'not available';
            $vehicle->save();
        }

        return redirect()->back()->with('status', 'Booking was responded');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
