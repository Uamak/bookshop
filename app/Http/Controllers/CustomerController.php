<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index()
    {
        $customers=Customer::get();

        return view('customers/index',['customers'=>$customers]);
    
    }

    public function create()
    {
        return view('customers/new');
    }

   
    public function store(Request $request)
    {
        //
        Customer::create(

            [
                'firstname'=>$request->firstname,
                'lastname'=>$request->lastname,
                'telephone'=>$request->telephone,
                'email'=>$request->email,
            ]
            );

            return redirect('/customers');


    }

   
    public function show($id)
    {
        $customer=Customer::find($id);
        return view('customers/show',['customer'=>$customer]);
    }

    
    public function edit($id)
    {
        $customer=Customer::find($id);
        return view('customers/edit',['customer'=>$customer]); 
    }

    
    public function update(Request $request, $id)
    {
        $customer=Customer::find($id);
        $customer->firstname = $request->firstname;
        $customer->lastname = $request->lastname;
        $customer->telephone = $request->telephone;
        $customer->email = $request->email;
        $customer->save();
        return redirect('/customers');
    }

   
    public function destroy($id)
    {
        $customer = Customer::find($id);

        $customer->delete();

        return redirect('/customers');
    }
}
