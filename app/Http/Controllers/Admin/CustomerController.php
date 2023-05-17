<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.customer.index', compact('customers'));
    }

    public function create(){
        return view('admin.customer.create');
    }

    public function store(Request $request){
        $data = new Customer;
        $data->name = $request->name; 
        $data->address = $request->address;
        $data->phone_number = $request->phone_number;
        $data->email = $request->email;

        $data->save();
        return redirect('admin/customer');
    }

    public function edit($id){
        $customer = Customer::find($id);
        return view('admin.customer.edit', compact('customer'));
    }

    public function update($id, Request $request){
        $data = Customer::find($id);
        $data->name = $request->name; 
        $data->address = $request->address;
        $data->phone_number = $request->phone_number;
        $data->email = $request->email;

        $data->update();
        return redirect('admin/customer');
    }

    public function destroy($id){
        $data = Customer::find($id);
        $data->delete();
        return redirect('admin/customer');
    }
}
