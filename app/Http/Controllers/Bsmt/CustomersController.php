<?php

namespace App\Http\Controllers\Bsmt;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
  public function index()
    {
       $customers = Customer::all(); 
       return view('customers.index',['customers'=>$customers]);
    }
    
    public function show(Customer $customer)
    {
        return view('customers.show',compact('customer'));
    }
    
    public function create()
    {
        
       $customer = new Customer; 
        return view('customers.create',compact('customer'));
        
    }
    
    public function store(CreateCustomerRequest $request)
    {
        $customer = new Customer;
        $customer->fill(
            $request->only('customer')
        );
        $customer->save();

        session()->flash('message', 'Заказчик добавлен!!!');

        return redirect()->route('customers_path');
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit')->with(['customer'=>$customer]);
    }

    public function update(Customer $customer, UpdateCustomerRequest $request)
    {
        $customer->update(
            $request->only('customer' )
        );

        session()->flash('message', 'Заказчик обновлен!!!');

        return redirect()->route('customer_path', ['customer' => $customer->id]);
    }

    public function delete(Customer $customer)
    {
        
        //if(\Auth::user()) {
        //    return redirect()->route('vbsmts_path');
        //}
        
        $vbsmt->delete();

        session()->flash('message', 'Заказчик удален!!!');

        return redirect()->route('customers_path');
    }
}
