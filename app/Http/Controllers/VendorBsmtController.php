<?php

namespace App\Http\Controllers;
use App\Vendor_Bsmt;
use Illuminate\Http\Request;
use App\Http\Requests\CreateVendorBsmtRequest;
use App\Http\Requests\UpdateVendorBsmtRequest;

class VendorBsmtController extends Controller
{
    public function index()
    {
       $vbsmts = Vendor_Bsmt::all(); 
       return view('bsmtvendors.index',['vbsmts'=>$vbsmts]);
    }
    
    public function show(Vendor_Bsmt $vbsmt)
    {
        return view('bsmtvendors.show',compact('vbsmt'));
    }
    
    public function create()
    {
        
       $vbsmt = new Vendor_Bsmt; 
        return view('bsmtvendors.create',compact('vbsmt'));
        
    }
    
    public function store(CreateVendorBsmtRequest $request)
    {
        $vbsmt = new Vendor_Bsmt;
        $vbsmt->fill(
            $request->only('vendorname')
        );
        $vbsmt->save();

        session()->flash('message', 'Производитель БСМТ добавлен!!!');

        return redirect()->route('vbsmts_path');
    }

    public function edit(Vendor_Bsmt $vbsmt)
    {
        return view('bsmtvendors.edit')->with(['vbsmt'=>$vbsmt]);
    }

    public function update(Vendor_Bsmt $vbsmt, UpdateVendorBsmtRequest $request)
    {
        $vbsmt->update(
            $request->only('vendorname' )
        );

        session()->flash('message', 'Произвоитель БСМТ обновлен!!!');

        return redirect()->route('vbsmt_path', ['vbsmt' => $vbsmt->id]);
    }

    public function delete(Vendor_Bsmt $vbsmt)
    {
        
        //if(\Auth::user()) {
        //    return redirect()->route('vbsmts_path');
        //}
        
        $vbsmt->delete();

        session()->flash('message', 'Блок БСМТ удален!!!');

        return redirect()->route('vbsmts_path');
    }
    
}