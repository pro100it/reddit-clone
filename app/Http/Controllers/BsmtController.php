<?php

namespace App\Http\Controllers;

use App\Bsmt;
use Illuminate\Http\Request;
//use App\Http\Requests\CreateTransportRequest;
//use App\Http\Requests\UpdateTransportRequest;

class BsmtController extends Controller
{
    public function index()
    {
        $bsmts = Bsmt::with('user')->orderBy('id', 'desc')->paginate(10);

        return view('transports.index')->with(['transports' => $transports]);
    }

}
