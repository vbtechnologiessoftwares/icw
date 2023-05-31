<?php

namespace App\Http\Controllers;
use App\Models\Hetlh;

use Illuminate\Http\Request;

class HelthController extends Controller
{
    public function helthcoverage()
    {
    return view('helth.helthcoverage');
    }
     public function formsubmit(Request $request)
    {
    	dd($request);
    return view('helth.helthcoverage');
    }
}
