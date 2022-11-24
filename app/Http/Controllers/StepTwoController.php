<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StepTwoController extends Controller
{
    public function create()
    {
        return view('auth.register2');
    }

    public function store(Request $request)
    {

        auth()->user()->update([
            
            'ic' => $request->ic,
            'age' => $request->age,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'state' => $request->state,

            
        ]);
        return redirect()->route('home2');
    }
}
