<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->role === "admin"){
            $users = User::where('role', 'operator')->get();
            return view('taxidrivers.index')->with('users', $users);
        }elseif(Auth::user()->role === "user"){
            return view('booktaxi');
        } else{
            return view('home');
        }
    }

    public function all_taxidrivers()
    {
        $users = User::where('role', 'operator')->get();
        return view('all_taxidrivers')->with('users', $users);
    }

    public function all_vehicles()
    {
        return view('all_vehicles')->with('vehicles', Vehicle::all());
    }

}
