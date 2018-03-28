<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Post;
use App\State;
use App\Customer;
use App\Transport;
use App\TransportActive;




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

        $atransports = new TransportActive; 

        return view('transports_active.create')
               ->with(['atransport' => $atransports,
                       'customer'  =>$customers,
                       'transport' =>$transports,
                       'state'     => $states]
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
            $request->only('customer_id','transport_id','state_id', 'info')
        );
        $atransport->save();

        $customer = Customer::find($request->customer_id);
        $transport = Transport::find($request->transport_id);
        $state = State::find($request->state_id);

        /**
         * Выводим информацию в таблицу пост о добавлении транспорта на линию
         */
        $post = new Post;
        $post->title       = 'Добавлена информация о новом транспорте на линии';
        $post->description = 'Заказчик: '.$customer->customer.
                             '<br>Транспорт: '.$transport->govnumber.
                             '<br>Статус: '.$state->name_state.
                             '<br>Дополнительная информация:<br>'.$atransport->info.'';
        $post->url = route('transport_active_path', ['atransport' => $atransport->id]);
        $post->user_id = $request->user()->id;
        $post->created_at = date('Y-m-d H:i:s');
        $post->updated_at = date('Y-m-d H:i:s');        
        $post->save();

        session()->flash('message', 'Транспорт добавлен');

        return redirect()->route('transports_active_path');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TransportActive $atransport)
    {
        return view('transports_active.show',compact('atransport'));
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
        
        return view('transports_active.edit')->
            with(['atransport'=>$atransport,
                  'customer'=>$customers,
                  'transport'=>$transports,
                  'state'=>$states]);

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
            $request->only('customer_id','transport_id','state_id', 'info')
        );

        $customer = Customer::find($request->customer_id);
        $transport = Transport::find($request->transport_id);
        $state = State::find($request->state_id);

        /**
         * Выводим информацию в таблицу пост об обновлении транспорта
         */
        $post = new Post;
        $post->title       = 'Обновлена информация о транспорте на линии';
        $post->description = 'Заказчик '.$customer->customer.
                             '<br>Транспорт: '.$transport->govnumber.
                             '<br>Статус: '.$state->name_state. 
                             '<br>Дополнительная информация:<br>'.$atransport->info.'';
        $post->url = route('transport_active_path', ['atransport' => $atransport->id]);
        $post->user_id = $request->user()->id;
        $post->created_at = date('Y-m-d H:i:s');
        $post->updated_at = date('Y-m-d H:i:s');        
        $post->save();

        session()->flash('message', 'Транспорт обновлен');

        return redirect()->route('transport_active_path', ['atransport' => $atransport->id]);
    }

    public function delete(TransportActive $atransport)
    {
        
        $atransport->delete();

        session()->flash('message', 'Транспорт удален из базы !!!');

        return redirect()->route('transports_active_path');
    }
}
