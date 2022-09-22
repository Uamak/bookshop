<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
   
    public function index()
    {
        $suppliers = Supplier::get();
        return view('suppliers/index' , ['suppliers'=>$suppliers]);
       
    }

    public function create()
    {
        //

        return view('suppliers/new');
    }

    public function store(Request $request)
    {
        //

        Supplier::create(

            [
                'first_name' => $request->firstname,
                'last_name' => $request->lastname,
                'telephone' => $request->telephone,
                'address' => $request->address,
                'email' => $request->email,
            ]
            );

            return redirect('/suppliers');
    }

    
    public function show($id)
    {
        $supplier = Supplier::find($id);

        return view('suppliers/show' , ['supplier'=>$supplier]);
    }

    public function edit(Request $request , $id)
    {
        $supplier = Supplier::find($id);

        $supplier->first_name = $request->first_name;
        $supplier->last_name = $request->last_name;
        $supplier->telephone = $request->telephone;
        $supplier->email = $request->email;
        $supplier->address = $request->address;

        $supplier->save();

        return redirect('/suppliers');

    }

    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id);

        return view('suppliers/edit' , ['supplier'=>$supplier]);
    }

   
    public function destroy($id)
    {
        $supplier = Supplier::find($id);

        $supplier->delete();

        return redirect('/suppliers');
    }
}
