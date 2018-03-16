<?php

namespace App\Http\Controllers;
use App\VendorBsmt;
use Illuminate\Http\Request;

class VendorBsmtController extends Controller
{
    public function index()
    {
       $vbsmts = VendorBsmt::all(); 
       return view('bsmtvendors.index',['vbsmts'=>$vbsmts]);
    }
    
    public function show(VendorBsmt $vbsmt)
    {
        return view('bsmtvendors.show',compact('vbsmt'));
    }
    
    public function create()
    {
        
       $bsmt = new VendorBsmt; 
        return view('bsmtvendors.create',compact('vbsmt'));
        
    }
    
    public function store(CreateVendorBsmtRequest $request)
    {
        $vbsmt = new VendorBsmt;
        $vbsmt->fill(
            $request->only('vendorname')
        );
        $vbsmt->save();

        session()->flash('message', 'Производитель БСМТ добавлен!!!');

        return redirect()->route('vbsmts_path');
    }

    public function edit(VendorBsmt $vbsmt)
    {
        return view('bsmtvendors.edit')->with(['vbsmt'=>$vbsmt]);
    }

    public function update(VendorBsmt $vbsmt, \App\Http\Requests\UpdateVendorBsmtRequest $request)
    {
        $vbsmt->update(
            $request->only('vendorname' )
        );

        session()->flash('message', 'Произвоитель БСМТ обновлен!!!');

        return redirect()->route('vbsmt_path', ['vbsmt' => $vbsmt->id]);
    }

    public function delete(VendorBsmt $vbsmt)
    {
        
        if(\Auth::user()) {
            return redirect()->route('vbsmts_path');
        }
        
        $bsmt->delete();

        session()->flash('message', 'Блок БСМТ удален!!!');

        return redirect()->route('vbsmts_path');
    }
    
}