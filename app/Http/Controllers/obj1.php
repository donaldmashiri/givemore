<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passenger;

class PassengerController extends Controller
{
    public function create()
    {
        return view('passengers.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'photo' => 'required|image',
        ]);

        // Handle file upload
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = $file->getClientOriginalName();
            $file->storeAs('photos', $fileName);
            $validatedData['photo'] = $fileName;
        }

        // Create a new passenger record
        $passenger = Passenger::create($validatedData);

        // Redirect to a success page or perform any additional actions

        return redirect()->route('passengers.show', $passenger->id);
    }

    public function show($id)
    {
        $passenger = Passenger::findOrFail($id);

        return view('passengers.show', compact('passenger'));
    }
}
