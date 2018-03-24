<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TransportActive;
use App\Customer;
use App\Transport;
use App\State;

use App\Http\Requests\CreateTransportActiveRequest;
use App\Http\Requests\UpdateTransportActiveRequest;

class TransportActiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atransports = TransportActive::all(); 
        return view('transports_active.index',['atransports'=>$atransports]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers  = Customer::all();
        $transports = Transport::all();
        $states     = State::all();

        $atransport = new TransportActive; 

        return view('transport_active.create')
               ->with(['atransport' => $atransport,
                       'customers'  =>$customers,
                       'transports' =>$transports,
                       'states'     => $states]
                     );
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTransportActiveRequest $request)
    {
        $atransport = new TransportActive;
        $atransport->fill(
            $request->only('customer_id','transport_id','state_id')
        );
        $atransport->save();

        session()->flash('message', 'Транспорт добавлен');

        return redirect()->route('atransports_path');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TransportActive $atransport)
    {
        return view('transport_active.show',compact('atransport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TransportActive $atransport)
    {
        $customers     = Customer::all();
        $transports    = Transport::all();
        $states        = State::all();
        
        return view('transport_active.edit')->with(['atransport'=>$atransport,'customer'=>$customers,'transport'=>$transports,'state',$states]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TransportActive $atransport, UpdateTransportActiveRequest $request)
    {
        $atransport->update(
            $request->only('customer_id','transport_id','state_id')
        );

        session()->flash('message', 'Транспорт обновлен');

        return redirect()->route('atransport_path', ['atransport' => $atransport->id]);
    }

    public function delete(TransportActive $atransport)
    {
        
        $atransport->delete();

        session()->flash('message', 'Блок БСМТ удален!!!');

        return redirect()->route('atransports_path');
    }
}
