<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Product;
use File;
use Image;

class PackageController extends Controller
{
    public function index(){
        $packages = Package::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.package.index', compact('packages'));
    }

    public function create(){
        $products = Product::all();
        return view('admin.package.create', compact('products'));
    }

    public function store(Request $request){
        $data = new Package; 
        $data->product_name = json_encode($request->product_name);
        $data->package_name = $request->package_name;
        $data->description = $request->description;
        $data->price = $request->price;

        $image = $request->image;
        $filename = time().'.'. $image->getClientOriginalExtension();
        Image::make($image)->save('thumb/'.$filename);
        $image->move('images/', $filename);
        $data->image = $filename;

        $data->save();
        return redirect('admin/package');
    }

    public function edit($id){
        $package = Package::find($id);
        $products = Product::all();
        return view('admin.package.edit', compact('package', 'products'));
    }

    public function update($id, Request $request){
        $data = Package::find($id);
        $data->product_name = $request->product_name; 
        $data->package_name = $request->package_name;
        $data->description = $request->description;
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
        return redirect('admin/package');
    }

    public function destroy($id){
        $data = Package::find($id);
        $data->delete();
        return redirect('admin/package');
    }
}
