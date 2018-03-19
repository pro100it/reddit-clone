<?php

namespace App\Http\Controllers;

use App\BsmtStatus;
use Illuminate\Http\Request;
use App\Http\Requests\CreateBsmtStatusRequest;
use App\Http\Requests\UpdateBsmtStatusRequest;

class BstmStatusController extends Controller
{
    public function index()
    {
       $sbsmts = BsmtStatus::all(); 
       return view('bsmtstatus.index',['sbsmts'=>$sbsmts]);
    }
    
    public function show(BsmtStatus $sbsmt)
    {
        return view('bsmtstatus.show',compact('sbsmt'));
    }
    
    public function create()
    {
        
       $sbsmt = new BsmtStatus; 
        return view('bsmtstatus.create',compact('sbsmt'));
        
    }
    
    public function store(CreateBsmtStatusRequest $request)
    {
        $sbsmt = new BsmtStatus;
        $sbsmt->fill(
            $request->only('status')
        );
        $sbsmt->save();

        session()->flash('message', 'Статус БСМТ добавлен!!!');

        return redirect()->route('sbsmts_path');
    }

    public function edit(BsmtStatus $sbsmt)
    {
        return view('bsmtstatus.edit')->with(['sbsmt'=>$sbsmt]);
    }

    public function update(BsmtStatus $sbsmt, UpdateBsmtStatusRequest $request)
    {
        $sbsmt->update(
            $request->only('status' )
        );

        session()->flash('message', 'Статус БСМТ обновлен!!!');

        return redirect()->route('sbsmt_path', ['sbsmt' => $sbsmt->id]);
    }

    public function delete(BsmtStatus $sbsmt)
    {
        
        //if(\Auth::user()) {
        //    return redirect()->route('vbsmts_path');
        //}
        
        $sbsmt->delete();

        session()->flash('message', 'Статус БСМТ удален!!!');

        return redirect()->route('sbsmts_path');
    }
}
