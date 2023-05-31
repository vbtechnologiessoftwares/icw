<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;

class AutoController extends Controller
{
    public function autocoverage()
    {
    return view('auto.autocoverage');
    }


   public function index()
    {
    
        $products = Auto::latest()->paginate(5);
         return view('auto.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($id)
    {
    	 $autoshow = Auto::find($id);
    	/* dd($autoshow);*/
    	   
        return view('auto.show',compact('autoshow'));
    } 
}
