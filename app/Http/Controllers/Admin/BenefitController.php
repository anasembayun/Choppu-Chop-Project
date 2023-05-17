<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Benefit;
use File;
use Image;

class BenefitController extends Controller
{
    public function index(){
        $benefits = Benefit::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.benefit.index', compact('benefits'));
    }

    public function create(){
        return view('admin.benefit.create');
    }

    public function store(Request $request){
        $data = new Benefit;
        $data->title_left = $request->title_left; 
        $data->description_left = $request->description_left;
        $data->benefit_left = $request->benefit_left;

        $data->title_right = $request->title_right; 
        $data->description_right = $request->description_right;
        $data->benefit_right = $request->benefit_right;
        $data->link = $request->link;

        $img_right = $request->img_right;
        $filename = time().'.'. $img_right->getClientOriginalExtension();
        Image::make($img_right)->save('thumb/'.$filename);
        $img_right->move('images/', $filename);
        $data->img_right = $filename;

        $img_left = $request->img_left;
        $filename = time().'.'. $img_left->getClientOriginalExtension();
        Image::make($img_left)->save('thumb/'.$filename);
        $img_left->move('images/', $filename);
        $data->img_left = $filename;

        $data->save();
        return redirect('admin/benefit');
    }

    public function edit($id){
        $benefit = Benefit::find($id);
        return view('admin.benefit.edit', compact('benefit'));
    }

    public function update($id, Request $request){
        $data = Benefit::find($id);
        $data->title_left = $request->title_left; 
        $data->description_left = $request->description_left;
        $data->benefit_left = $request->benefit_left;

        $data->title_right = $request->title_right; 
        $data->description_right = $request->description_right;
        $data->benefit_right = $request->benefit_right;
        $data->link = $request->link;

        if ($request->img_right!= NULL) {
            $oldfilename = $data->img_right;
            $img_right_path = "thumb/" . $oldfilename;
            if (File::exists($img_right_path)) {
                File::delete($img_right_path);
            }
            $img_right = $request->img_right;
            $filename = time() . '.' . $img_right->getClientOriginalExtension();

            Image::make($img_right)->save('thumb/' . $filename);
            $img_right->move('images/', $filename);

            $data->img_right = $filename;
        }

        if ($request->img_left!= NULL) {
            $oldfilename = $data->img_left;
            $img_left_path = "thumb/" . $oldfilename;
            if (File::exists($img_img_left)) {
                File::delete($img_img_left);
            }
            $img_left = $request->img_left;
            $filename = time() . '.' . $img_left->getClientOriginalExtension();

            Image::make($img_left)->save('thumb/' . $filename);
            $img_left->move('images/', $filename);

            $data->img_left = $filename;
        }

        $data->update();
        return redirect('admin/benefit');
    }

    public function destroy($id){
        $data = Benefit::find($id);
        $data->delete();
        return redirect('admin/benefit');
    }
}
