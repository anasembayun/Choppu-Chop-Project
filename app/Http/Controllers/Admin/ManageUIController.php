<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use File;
use Image;
class ManageUIController extends Controller
{
    public function listProfile(Request $request){
        $profiles = Profile::all();
        $profile = Profile::count();
        return view('admin.profile.index', compact('profiles', 'profile'));
    }

    public function viewAddProfile(){
        return view('admin.profile.create');
    }

    public function addProfile(Request $request){
        // image
        $image = $request->image;
        $filename = time().'.'. $image->getClientOriginalExtension();
        Image::make($image)->save('thumb/'.$filename);
        $image->move('images/', $filename);

        //summernote
        $storage = "images/";
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->subdesc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
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

        Profile::create([
            'title' => $request->title,
            'subtitle'  =>  $request->subtitle,
            'link_gmaps' => $request->link_gmaps,
            'desc' => $request->desc,
            'image' => $filename,
            'subdesc' => $dom->saveHTML(),
        ]);

        return redirect('kelola-wisata/daftar-wisata');
    }
}
