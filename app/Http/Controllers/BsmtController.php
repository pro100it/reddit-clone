<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transport
use App\Bsmt

class BsmtController extends Controller
{
    public function Create()
    {
     $bsmt = Bsmt::with('Bsmt')->find($id);
     return view('transports.create',['data'=>$bsmt]);
    }
}
