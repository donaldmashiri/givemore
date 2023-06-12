<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransportSeeker;
use App\Models\Taxi;

class TransportSeekerController extends Controller
{
    public function login()
    {
        return view('transport_seekers.login');
    }

    public function authenticate(Request $request)
    {
        // Validate the login credentials
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the transport seeker
        if (auth()->attempt($validatedData)) {
            // Authentication successful

            // Redirect to the dashboard or desired page
            return redirect()->route('transport_seekers.dashboard');
        } else {
            // Authentication failed

            // Redirect back with an error message
            return redirect()->back()->withErrors(['login_failed' => 'Invalid email or password.']);
        }
    }

    public function dashboard()
    {
        // Get the authenticated transport seeker
        $transportSeeker = auth()->user();

        // Get the available taxis for booking
        $availableTaxis = Taxi::where('availability', true)->get();

        return view('transport_seekers.dashboard', compact('transportSeeker', 'availableTaxis'));
    }
}
