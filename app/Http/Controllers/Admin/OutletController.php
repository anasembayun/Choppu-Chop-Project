<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Outlet;
use App\Models\Partner;

class OutletController extends Controller
{
    public function index(){
        $outlets = Outlet::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.outlet.index', compact('outlets'));
    }

    public function create(){
        $partner = Partner::all();
        return view('admin.outlet.create', compact('partner'));
    }

    public function store(Request $request){
        $data = new Outlet;
        $data->outlet_name = $request->outlet_name; 
        $data->partner_id = $request->partner_id;
        $data->province = $request->province;
        $data->city = $request->city;
        $data->location = $request->location;
        $data->gmaps_link = $request->gmaps_link;

        $data->save();
        return redirect('admin/outlet');
    }

    public function edit($id){
        $outlet = Outlet::find($id);
        $partner = Partner::all();
        return view('admin.outlet.edit', compact('outlet','partner'));
    }

    public function update($id, Request $request){
        $data = Outlet::find($id);
        $data->outlet_name = $request->outlet_name; 
        $data->partner_id = $request->partner_id;
        $data->province = $request->province;
        $data->city = $request->city;
        $data->location = $request->location;
        $data->gmaps_link = $request->gmaps_link;

        $data->update();
        return redirect('admin/outlet');
    }

    public function destroy($id){
        $data = Outlet::find($id);
        $data->delete();
        return redirect('admin/outlet');
    }
}
