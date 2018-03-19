<?php

namespace App\Http\Controllers;

use App\Bsmt;
use App\VendorBsmt;
use App\BsmtStatus;
use Illuminate\Http\Request;
use App\Http\Requests\CreateBsmtRequest;
use App\Http\Requests\UpdateBsmtRequest;

class BsmtController extends Controller
{
    public function index()
    {
       $bsmts = Bsmt::all(); 
       return view('bsmts.index',['bsmts'=>$bsmts]);
    }
    
    public function show(Bsmt $bsmt)
    {
        return view('bsmts.show',compact('bsmt'));
    }
    
    public function create()
    {
        
       $bsmt = new Bsmt; 
       $vbsmts = VendorBsmt::all(); 
       $sbsmts = BsmtStatus::all();
       return view('bsmts.create')
               ->with(['bsmt' => $bsmt,
                       'vbsmt' =>$vbsmts,
                       'sbsmt' =>$sbsmts]
                     );
        
    }
    
    public function store(CreateBsmtRequest $request)
    {
        $bsmt = new Bsmt;
        $bsmt->fill(
            $request->only('vendor_id', 'modelnumber', 'modelimei','statusbsmt_id')
        );
        $bsmt->save();

        session()->flash('message', 'Блок БСМТ добавлен!!!');

        return redirect()->route('bsmts_path');
    }

    public function edit(Bsmt $bsmt)
    {
        $vbsmts = VendorBsmt::all();
        $sbsmts = BsmtStatus::all();
        
        return view('bsmts.edit')->with(['bsmt'=>$bsmt,'vbsmt'=>$vbsmts,'sbsmt'=>$sbsmts]);
        
    }

    public function update(Bsmt $bsmt, UpdateBsmtRequest $request)
    {
        $bsmt->update(
            $request->only('vendor_id', 'modelnumber', 'modelimei','statusbsmt_id' )
        );

        session()->flash('message', 'Блок БСМТ обновлен!!!');

        return redirect()->route('bsmt_path', ['bsmt' => $bsmt->id]);
    }

    public function delete(Bsmt $bsmt)
    {
        
        $bsmt->delete();

        session()->flash('message', 'Блок БСМТ удален!!!');

        return redirect()->route('bsmts_path');
    }
}
