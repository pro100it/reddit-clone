<?php

namespace App\Http\Controllers;


use App\Post;
use App\Bsmt;
use App\Customer;
use App\Transport;
use DB;
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
        $bsmts = Bsmt::all(); 
        $customers = Customer::all();
        return view('transports.create')->with(['transport' => $transport,'bsmt'=>$bsmts, 'customer'=>$customers]);
        
    }
   
    public function store(CreateTransportRequest $request)
    {
        $transport = new Transport;
        $post = new Post;
        
                
        $transport->fill(
            $request->only('customer_id','model', 'govnumber', 'bsmt_id')
        );
        
        DB::insert('insert into posts (title,description,url,user_id) values (?, ?, ?, ?)', 
                ['Добавлен новый транспорт',
                'Модель: ' .$request->model. 'Гос.номер: '.$request->govnumber.'','http://localhost',$request->user()->id]);
        
        $transport->user_id = $request->user()->id;
        $transport->save();
        //$post->user_id = $request->user()->id;
        //$post->save();

        session()->flash('message', 'Транспорт добавлен!!!');

        return redirect()->route('transports_path');
    }

    public function edit(Transport $transport)
    {
        if($transport->user_id != \Auth::user()->id) {
            return redirect()->route('transports_path');
        }
        $bsmts = Bsmt::all();
        $customers = Customer::all();
        return view('transports.edit')->with(['transport' => $transport,'bsmt'=>$bsmts, 'customer'=>$customers]);
    }

    public function update(Transport $transport, UpdateTransportRequest $request)
    {
        $transport->update(
            $request->only('customer_id','model', 'govnumber', 'bsmt_id' )
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
