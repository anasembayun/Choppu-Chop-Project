<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Category;
use File;
use Image;

class ManageArtikelController extends Controller
{
    public function listArtikel(Request $request){
        $artikels = Artikel::all();
        return view('admin.artikel.index', compact('artikels'));
    }

    public function viewAddArtikel(){
        $categories = Category::all();
        return view('admin.artikel.create', compact('categories'));
    }

    public function addArtikel(Request $request){
        // image
        $image = $request->image;
        $filename = time().'.'. $image->getClientOriginalExtension();
        Image::make($image)->save('thumb/'.$filename);
        $image->move('images/', $filename);

        //summernote
        $storage = "images/";
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
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
                $artikel_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $artikel_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        Artikel::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'author'  => $request->author,
            'image' => $filename,
            'desc' => $dom->saveHTML(),
        ]);

        return redirect('artikel/daftar-artikel');
    }

    public function destroyArtikel($id){
        $data = Artikel::find($id);
        $data->delete();
        return redirect('artikel/daftar-artikel');
    }

    public function listCategory(Request $request){
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function viewAddCategory(){
        return view('admin.category.create');
    }

    public function addCategory(Request $request){
        $data = new Category;
        $data->category = $request->category;

        $data->save();
        return redirect('artikel/daftar-kategori');
    }
}
