<?php

namespace App\Http\Controllers;
use App\Models\Helthss;

use Illuminate\Http\Request;

class HelthController extends Controller
{
    public function helthcoverage()
    {
    return view('helth.helthcoverage');
    }
     public function formsubmit(Request $request)
    {
		 $helth = Helthss::create($request->all());
       return redirect()->back();
	}
	public function index()
    {
    
        $products = Helthss::latest()->paginate(5);
         return view('helth.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
	
	 public function show($id)
    {
    	 $helthss = Helthss::find($id);
      return view('helth.show',compact('helthss'));
    } 
}
