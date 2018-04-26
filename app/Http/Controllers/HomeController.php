<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Transport;
use App\Bsmt;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     if (Auth::guest()) {
        return view('welcome'); 
     }  
        $transports = Transport::all();
        $bsmts      = Bsmt::all();
        return view('home')
            ->with(['transports' => $transports])
            ->with(['bsmts'      => $bsmts])
            ;
     
    }
    public function welcome()
	{
            return view('welcome');
	}
}
