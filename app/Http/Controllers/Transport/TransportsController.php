<?php

namespace App\Http\Controllers\Transport;


use App\Post;
use App\Bsmt;
use App\Customer;
use App\Transport;
use App\ModelTransport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTransportRequest;
use App\Http\Requests\UpdateTransportRequest;

class TransportsController extends Controller
{
    public function index()
    {
        $transports = Transport::with('user')->orderBy('id', 'desc')->paginate(10);
        return view('transports.index')->with(['transports' => $transports]);
    }

    
    public function show(Transport $transport)
    {
        return view('transports.show',compact('transport'));
    }

    public function create()
    {
        $transport = New Transport;
        $modeltransports = ModelTransport::all();
        $bsmts = Bsmt::all();         
        return view('transports.create')->with(['transport' => $transport,'bsmt'=>$bsmts,'modeltransport'=>$modeltransports]);
        
    }
   
    public function store(CreateTransportRequest $request)
    {
        $transport = new Transport;
        $post = new Post;
        
                
        $transport->fill(
            $request->only('model_name_id', 'gov_number', 'bsmt_id')
        );
        
        $transport->user_id = $request->user()->id;
        $transport->save();
        
        session()->flash('message', 'Транспорт добавлен!!!');

        return redirect()->route('transports_path');
    }

    public function edit(Transport $transport)
    {
        if($transport->user_id != \Auth::user()->id) {
            return redirect()->route('transports_path');
        }
      
        $bsmts = Bsmt::all();
        $modeltransports = ModelTransport::all();
        return view('transports.edit')->with(['transport' => $transport,'bsmt'=>$bsmts,'modeltransport'=>$modeltransports]);
    }

    public function update(Transport $transport, UpdateTransportRequest $request)
    {
        $transport->update(
            $request->only('model_name_id', 'gov_number', 'bsmt_id' )
        );

        session()->flash('message', 'Транспорт обновлен!!!');

        return redirect()->route('transport_path', ['transport' => $transport->id]);
    }

    public function delete(Transport $transport)
    {
        if($transport->user_id != \Auth::user()->id) {
            return redirect()->route('transports_path');
        }

        $transport->delete();

        session()->flash('message', 'Транспорт удален!!!');

        return redirect()->route('transports_path');
    }
}
