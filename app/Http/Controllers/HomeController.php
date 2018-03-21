<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Transport;

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
        return view('home')->with(['transports' => $transports]);
     
    }
    public function welcome()
	{
            return view('welcome');
	}
}
