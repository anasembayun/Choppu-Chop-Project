<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Partner;

class PartnerController extends Controller
{
    public function index(){
        $partners = Partner::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.partner.index', compact('partners'));
    }

    public function create(){
        return view('admin.partner.create');
    }

    public function store(Request $request){
        $data = new Partner;
        $data->full_name = $request->full_name; 
        $data->address = $request->address;
        $data->phone_number = $request->phone_number;
        $data->email = $request->email;

        $data->save();
        return redirect('admin/partner');
    }

    public function edit($id){
        $partner = Partner::find($id);
        return view('admin.partner.edit', compact('partner'));
    }

    public function update($id, Request $request){
        $data = Partner::find($id);
        $data->full_name = $request->full_name; 
        $data->address = $request->address;
        $data->phone_number = $request->phone_number;
        $data->email = $request->email;

        $data->update();
        return redirect('admin/partner');
    }

    public function destroy($id){
        $data = Partner::find($id);
        $data->delete();
        return redirect('admin/partner');
    }
}
