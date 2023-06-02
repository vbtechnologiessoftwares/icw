<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;
use App\Models\Automake;
use App\Models\Automodel;
use App\Models\Autosubmodelmake;

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

 public function testing()
    {
         $automake = Automake::get();
     
           
        return view('testing',compact('automake'));
    } 

     public function testingsub(Request $request)
    {
        

        $parent_id = $request->cat_id;
        $automodelmake = Automodel::where('automake_id', $parent_id)->get();
        return response()->json([
            'automodelmake' => $automodelmake
        ]);

         $automake = Automake::get();
        return view('testing',compact('automake'));
    } 

         public function testingsubsub(Request $request)
    {
        

        $parent_ids = $request->cat_id;
        $autosubmodelmake = Autosubmodelmake::where('automake_id', $parent_ids)->get();
        return response()->json([
            'autosubmodelmake' => $autosubmodelmake
        ]);

         $automake = Automake::get();
        return view('testing',compact('automake'));
    } 


    public function show($id)
    {
    	 $autoshow = Auto::find($id);
    	/* dd($autoshow);*/
    	   
        return view('auto.show',compact('autoshow'));
    } 
}
