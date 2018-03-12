<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bsmt extends Controller
{
    public function Create() 
    {
     $bsmt = Bsmt::with('Bsmt')->find($id);
     return view('transports.create',['data'=>$bsmt]);
    }
}
