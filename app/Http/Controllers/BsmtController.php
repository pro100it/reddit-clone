<?php

namespace App\Http\Controllers;

use App\Bsmt;
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
        return view('bsmts.create',compact('bsmt'));
        
    }
    
    public function store(CreateBsmtRequest $request)
    {
        $bsmt = new Bsmt;
        $bsmt->fill(
            $request->only('model', 'modelnumber', 'modelimei')
        );
        $bsmt->save();

        session()->flash('message', 'Блок БСМТ добавлен!!!');

        return redirect()->route('bsmts_path');
    }

    public function edit(Bsmt $bsmt)
    {
        return view('bsmts.edit')->with(['bsmt'=>$bsmt]);
    }

    public function update(Bsmt $bsmt, UpdateBsmtRequest $request)
    {
        $bsmt->update(
            $request->only('model', 'modelnumber', 'modelimei' )
        );

        session()->flash('message', 'Блок БСМТ обновлен!!!');

        return redirect()->route('bsmt_path', ['bsmt' => $bsmt->id]);
    }

    public function delete(Bsmt $bsmt)
    {
        
        if(\Auth::user()) {
            return redirect()->route('bsmts_path');
        }
        
        $bsmt->delete();

        session()->flash('message', 'Блок БСМТ удален!!!');

        return redirect()->route('bsmts_path');
    }
}
