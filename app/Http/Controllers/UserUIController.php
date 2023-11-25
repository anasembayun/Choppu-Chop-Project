<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tourism;
use App\Models\Gallery;
use App\Models\Artikel;
use App\Models\Profile;
use App\Models\Category;

class UserUIController extends Controller
{
    public function home(){
        $tourisms = Tourism::all();
        $galleries = Gallery::orderBy('id', 'desc')->paginate(15);
        $categories = Category::all();
        return view('user.home', compact('tourisms', 'galleries', 'categories'));
    }

    public function profile(){
        $tourisms = Tourism::all();
        $profile = Profile::latest()->first();
        $categories = Category::all();
        return view('user.profile', compact('tourisms', 'profile', 'categories'));
    }

    public function tourism($id){
        $tourisms = Tourism::all();
        $categories = Category::all();
        return view('layouts.user.template', compact('tourisms', 'categories', 'categories'));
    }

    public function detailTourism($id){
        $tourisms = Tourism::all();
        $tourism = Tourism::find($id);
        $galleries = Gallery::where('tourism_id',$id)->orderBy('id', 'desc')->paginate(6);
        $categories = Category::all();
        return view('user.detail_tourism', compact('tourism','tourisms', 'galleries', 'categories'));
    }

    public function artikel($id){
        $tourisms = Tourism::all();
        $artikels = Artikel::where('category_id',$id)->orderBy('id', 'desc');
        $categories = Category::all();
        return view('user.artikel', compact('artikels','tourisms', 'categories'));
    }

    public function detailArtikel($id){
        $tourisms = Tourism::all();
        $artikel = Artikel::find($id);
        $categories = Category::all();
        return view('user.detail_artikel', compact('artikel','tourisms', 'categories'));
    }

    public function umkm(){
        $tourisms = Tourism::all();
        $categories = Category::all();
        return view('user.umkm', compact('tourisms', 'categories'));
    }

}
