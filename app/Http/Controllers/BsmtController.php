<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transport;
use App\Bsmt;

class BsmtController extends Controller
{
    public function index()
    {
       $bsmts = Bsmt::with('transports')->get();
       $transports = Transport::all();	
        dd($bsmts);
    }
    
    public function show(Transport $transport)
    {
        return view('bsmt.show')->with(['bsmt' => $bsmt]);
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
