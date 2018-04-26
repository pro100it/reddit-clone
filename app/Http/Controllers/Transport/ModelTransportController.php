<?php

namespace App\Http\Controllers\Transport;

use App\ModelTransport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateModelTransportRequest;
use App\Http\Requests\UpdateModelTransportRequest;

class ModelTransportController extends Controller
{
    public function index()
    {
       $modeltransports = ModelTransport::all(); 
       return view('modeltransports.index',['modeltransports'=>$modeltransports]);
    }
    
    public function show(ModelTransport $modeltransport)
    {
        return view('modeltransports.show',compact('modeltransport'));
    }
    
    public function create()
    {
        
       $modeltransport = new ModelTransport; 
        return view('modeltransports.create',compact('modeltransport'));
        
    }
    
    public function store(CreateModelTransportRequest $request)
    {
        $modeltransport = new ModelTransport;
        $modeltransport->fill(
            $request->only('model_name')
        );
        $modeltransport->save();

        session()->flash('message', 'Модель транспорта добавлена!!!');

        return redirect()->route('modeltransports_path');
    }

    public function edit(ModelTransport $modeltransport)
    {
        return view('modeltransports.edit')->with(['modeltransport'=>$modeltransport]);
    }

    public function update(ModelTransport $modeltransport, UpdateModelTransportRequest $request)
    {
        $modeltransport->update(
            $request->only('model_name' )
        );

        session()->flash('message', 'Модель транспорта обновлена!!!');

        return redirect()->route('modeltransport_path', ['modeltransport' => $modeltransport->id]);
    }

    public function delete(ModelTransport $modeltransport)
    {
        
        //if(\Auth::user()) {
        //    return redirect()->route('vbsmts_path');
        //}
        
        $modeltransport->delete();

        session()->flash('message', 'Модель транспорта удалена!!!');

        return redirect()->route('modeltransports_path');
    }
}
