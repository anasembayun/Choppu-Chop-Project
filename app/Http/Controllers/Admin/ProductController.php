<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use File;
use Image;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.product.index', compact('products'));
    }

    public function create(){
        return view('admin.product.create');
    }

    public function store(Request $request){
        $data = new Product;
        $data->product_name = $request->product_name; 
        $data->product_code = $request->product_code;
        $data->description = $request->description;
        $data->variant = $request->variant;
        $data->price = $request->price;

        $image = $request->image;
        $filename = time().'.'. $image->getClientOriginalExtension();
        Image::make($image)->save('thumb/'.$filename);
        $image->move('images/', $filename);
        $data->image = $filename;

        $data->save();
        return redirect('admin/product');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('admin.product.edit', compact('product'));
    }

    public function update($id, Request $request){
        $data = Product::find($id);
        $data->product_name = $request->product_name; 
        $data->product_code = $request->product_code;
        $data->description = $request->description;
        $data->variant = $request->variant;
        $data->price = $request->price;

        if ($request->image!= NULL) {
            $oldfilename = $data->image;
            $image_path = "thumb/" . $oldfilename;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $image = $request->image;
            $filename = time() . '.' . $image->getClientOriginalExtension();

            Image::make($image)->save('thumb/' . $filename);
            $image->move('images/', $filename);

            $data->image = $filename;
        }

        $data->update();
        return redirect('admin/product');
    }

    public function destroy($id){
        $data = Product::find($id);
        $data->delete();
        return redirect('admin/product');
    }
}
