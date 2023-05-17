<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Partnership;
use File;
use Image;

class PartnershipController extends Controller
{
    public function index(){
        $partnerships = Partnership::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.partnership.index', compact('partnerships'));
    }

    public function create(){
        return view('admin.partnership.create');
    }

    public function store(Request $request){
        $data = new Partnership;
        $data->partnership_name = $request->partnership_name; 
        $data->description = $request->description;
        $data->link = $request->link;

        $image = $request->image;
        $filename = time().'.'. $image->getClientOriginalExtension();
        Image::make($image)->save('thumb/'.$filename);
        $image->move('images/', $filename);
        $data->image = $filename;

        $data->save();
        return redirect('admin/partnership');
    }

    public function edit($id){
        $partnership = Partnership::find($id);
        return view('admin.partnership.edit', compact('partnership'));
    }

    public function update($id, Request $request){
        $data = Partnership::find($id);
        $data->partnership_name = $request->partnership_name; 
        $data->description = $request->description;
        $data->link = $request->link;

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
        return redirect('admin/partnership');
    }

    public function destroy($id){
        $data = Partnership::find($id);
        $data->delete();
        return redirect('admin/partnership');
    }
}
