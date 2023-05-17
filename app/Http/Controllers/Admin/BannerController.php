<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use File;
use Image;

class BannerController extends Controller
{
    public function index(){
        $banners = Banner::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.banner.index', compact('banners'));
    }

    public function create(){
        return view('admin.banner.create');
    }

    public function store(Request $request){
        $data = new Banner;
        $data->title = $request->title; 
        $data->subtitle = $request->subtitle;
        $data->link = $request->link;

        $image = $request->image;
        $filename = time().'.'. $image->getClientOriginalExtension();
        Image::make($image)->save('thumb/'.$filename);
        $image->move('images/', $filename);
        $data->image = $filename;

        $data->save();
        return redirect('admin/banner');
    }

    public function edit($id){
        $banner = Banner::find($id);
        return view('admin.banner.edit', compact('banner'));
    }

    public function update($id, Request $request){
        $data = Banner::find($id);
        $data->title = $request->title; 
        $data->subtitle = $request->subtitle;
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
        return redirect('admin/banner');
    }

    public function destroy($id){
        $data = Banner::find($id);
        $data->delete();
        return redirect('admin/banner');
    }
}
