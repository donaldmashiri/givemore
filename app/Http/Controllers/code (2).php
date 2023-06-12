<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operator;

class OperatorController extends Controller
{
    public function create()
    {
        return view('operators.create');
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

        // Create a new operator record
        $operator = Operator::create($validatedData);

        // Perform physical evaluation
        // ...

        // Activate the operator's account
        $operator->account_status = 'active';
        $operator->save();

        // Redirect to a success page or perform any additional actions

        return redirect()->route('operators.show', $operator->id);
    }

    public function show($id)
    {
        $operator = Operator::findOrFail($id);

        return view('operators.show', compact('operator'));
    }
}
