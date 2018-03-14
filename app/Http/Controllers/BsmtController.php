<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transport;
use App\Bsmt;

class BsmtController extends Controller
{
    public function index()
    {
       $bsmts = Bsmt::all(); //with('bsmts')->get();
       //$transports = Transport::all();	
       // dd($bsmts);
       return view('bsmt.index',['bsmts'=>$bsmts]);
    }
    
    public function show(Transport $transport)
    {
        return view('bsmt.show')->with(['bsmts' => $bsmt]);
    }
    
    public function create()
    {
        $bsmt = new Bsmt;
        return view('transports.create')->with(['transport' => $transport]);
        
    }
    //public function Create()
    //{
       
    // $bsmt = Bsmt::with('Bsmt')->find($id);
      // return view('transports.create',['data'=>$bsmt]);
   // }
}
