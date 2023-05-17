<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductMaterial;

class MaterialController extends Controller
{
    public function index(){
        $materials = ProductMaterial::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.material.index', compact('materials'));
    }

    public function create(){
        return view('admin.material.create');
    }

    public function store(Request $request){
        $data = new ProductMaterial;
        $data->material_name = $request->material_name; 
        $data->material_code = $request->material_code;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->stock = $request->stock;

        $data->save();
        return redirect('admin/material');
    }

    public function edit($id){
        $material = ProductMaterial::find($id);
        return view('admin.material.edit', compact('material'));
    }

    public function update($id, Request $request){
        $data = ProductMaterial::find($id);
        $data->material_name = $request->material_name; 
        $data->material_code = $request->material_code;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->stock = $request->stock;

        $data->update();
        return redirect('admin/material');
    }

    public function destroy($id){
        $data = ProductMaterial::find($id);
        $data->delete();
        return redirect('admin/material');
    }
}
