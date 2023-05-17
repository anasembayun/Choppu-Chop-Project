<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\StockTransaction;

class StockTransactionController extends Controller
{
    public function index(){
        $transactions = StockTransaction::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.stock-transaction.index', compact('transactions'));
    }

    public function create(){
        $material = Material::all();
        return view('admin.stock-transaction.create', compact('material'));
    }

    public function store(Request $request){
        $data = new StockTransaction;
        $data->transaction_name = $request->transaction_name; 
        $data->material_id = $request->material_id;
        $data->province = $request->province;
        $data->city = $request->city;
        $data->location = $request->location;
        $data->gmaps_link = $request->gmaps_link;

        $data->save();
        return redirect('admin/stock-transaction');
    }

    public function edit($id){
        $transaction = StockTransaction::find($id);
        $material = Material::all();
        return view('admin.stock-transaction.edit', compact('transaction','material'));
    }

    public function update($id, Request $request){
        $data = StockTransaction::find($id);
        $data->transaction_name = $request->transaction_name; 
        $data->material_id = $request->material_id;
        $data->province = $request->province;
        $data->city = $request->city;
        $data->location = $request->location;
        $data->gmaps_link = $request->gmaps_link;

        $data->update();
        return redirect('admin/stock-transaction');
    }

    public function destroy($id){
        $data = StockTransaction::find($id);
        $data->delete();
        return redirect('admin/stock-transaction');
    }
}
