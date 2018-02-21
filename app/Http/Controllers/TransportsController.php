<?php

namespace App\Http\Controllers;

use App\Transport;
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
        return view('transports.show')->with(['transport' => $transport]);
    }

    public function create()
    {
        $transport = new Transport;
        return view('transports.create')->with(['transport' => $transport]);
    }

    public function store(CreateTransportRequest $request)
    {
        $transport = new Transport;
        $transport->fill(
            $request->only('model', 'govnumber', 'blockbsmt')
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
        
        return view('transports.edit')->with(['transport' => $transport]);
    }

    public function update(Transport $transport, UpdateTransportRequest $request)
    {
        $transport->update(
            $request->only('model', 'govnumber', 'blockbsmt')
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
