<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tourism;
use App\Models\Gallery;
use File;
use Image;

class ManageTourismController extends Controller
{
    public function listTourism(Request $request){
        $tourisms = Tourism::all();
        return view('admin.tourism.index', compact('tourisms'));
    }

    public function viewAddTourism(){
        return view('admin.tourism.create');
    }

    public function addTourism(Request $request){
        // image
        $image = $request->image;
        $filename = time().'.'. $image->getClientOriginalExtension();
        Image::make($image)->save('thumb/'.$filename);
        $image->move('images/', $filename);

        //summernote
        $storage = "images/";
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent),6,6).'_'.time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                $image = Image::make($src)->resize(1200,1200)->encode($mimetype, 100)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        Tourism::create([
            'tourism_name' => $request->tourism_name,
            'location'  =>  $request->location,
            'link_gmaps' => $request->link_gmaps,
            'image' => $filename,
            'description' => $dom->saveHTML(),
        ]);

        return redirect('kelola-wisata/daftar-wisata');
    }

    public function viewEditTourism($id){
        $tourism = Tourism::find($id);
        return view('admin.tourism.edit', compact('tourism'));
    }

    public function updateTourism(Request $request, $id)
    {
        $tourism = Tourism::find($id);
        // Image
        if ($request->hasFile('image')) {
            if (\File::exists("thumb/" . $tourism->image)) {
                \File::delete("thumb/" . $tourism->image);
            }
            $fileName = time().'.'.$request->image->extension();
            $request->file('image')->storeAs('images/', $fileName);
        }

        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $tourism->image;
        }

         //summernote
        $storage = "images/";
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent),6,6).'_'.time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                $image = Image::make($src)->resize(1200,1200)->encode($mimetype, 100)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        Tourism::where('id', $id)->update([
            'tourism_name' => $request->tourism_name,
            'location'  =>  $request->location,
            'link_gmaps' => $request->link_gmaps,
            'image' => $checkFileName,
            'description' => $dom->saveHTML(),
        ]);

        return redirect('kelola-wisata/daftar-wisata');

    }

    public function destroyTourism($id){
        $data = Tourism::find($id);
        $data->delete();
        return redirect('kelola-wisata/daftar-wisata');
    }

    public function listGallery(Request $request){
        $galleries = Gallery::all();
        return view('admin.gallery.index', compact('galleries'));
    }

    public function viewAddGallery(){
        $tourisms = Tourism::all();
        return view('admin.gallery.create', compact('tourisms'));
    }

    public function addGallery(Request $request){
        $galleries = new Gallery;
        $galleries->tourism_id = $request->tourism_id; 
        
        $image = $request->image;
        $filename = time().'.'. $image->getClientOriginalExtension();
        Image::make($image)->save('thumb/'.$filename);
        $image->move('images/', $filename);
        $galleries->image = $filename;

        $galleries->save();
        return redirect('kelola-wisata/daftar-galeri');
    }

    public function viewEditGallery($id){
        $gallery = Gallery::find($id);
        $tourisms = Tourism::all();
        return view('admin.gallery.edit', compact('gallery','tourisms'));
    }

    public function updateGallery($id, Request $request){
        $gallery = Gallery::find($id);
        $gallery->tourism_id = $request->tourism_id; 

        if ($request->image!= NULL) {
            $oldfilename = $gallery->image;
            $image_path = "thumb/" . $oldfilename;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $image = $request->image;
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('thumb/' . $filename);
            $image->move('images/', $filename);

            $gallery->image = $filename;
        }

        $gallery->update();
        return redirect('kelola-wisata/daftar-galeri');
    }

    public function destroyGallery($id){
        $data = Gallery::find($id);
        $data->delete();
        return redirect('kelola-wisata/daftar-galeri');
    }
}