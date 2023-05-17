<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index(){
        $transactions = Transaction::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.transaction.index', compact('transactions'));
    }

    public function create(){
        $product = Product::all();
        return view('admin.transaction.create', compact('product'));
    }

    public function store(Request $request){
        $data = new Transaction;
        $data->transaction_name = $request->transaction_name; 
        $data->product_id = $request->product_id;
        $data->province = $request->province;
        $data->city = $request->city;
        $data->location = $request->location;
        $data->gmaps_link = $request->gmaps_link;

        $data->save();
        return redirect('admin/transaction');
    }

    public function edit($id){
        $transaction = Transaction::find($id);
        $product = Product::all();
        return view('admin.transaction.edit', compact('transaction','product'));
    }

    public function update($id, Request $request){
        $data = Transaction::find($id);
        $data->transaction_name = $request->transaction_name; 
        $data->product_id = $request->product_id;
        $data->province = $request->province;
        $data->city = $request->city;
        $data->location = $request->location;
        $data->gmaps_link = $request->gmaps_link;

        $data->update();
        return redirect('admin/transaction');
    }

    public function destroy($id){
        $data = Transaction::find($id);
        $data->delete();
        return redirect('admin/transaction');
    }
}
