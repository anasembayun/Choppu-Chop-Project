<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Terms;

class TermsController extends Controller
{
    public function index(){
        $terms = Terms::orderBy('created_at', 'desc')->paginate(10);
        $no = 10 * ($terms->currentPage() - 1);
        return view('admin.terms.index', compact('terms','no'));
    }

    public function create(){
        return view('admin.terms.create');
    }

    public function store(Request $request){
        $request->validate([
            'addMore.*.terms' => 'required'
        ]);
    
        foreach ($request->addMore as $key => $value) {
            Terms::create($value);
        }
        return redirect('admin/terms');
    }

    public function edit($id){
        $terms = Terms::find($id);
        return view('admin.terms.edit', compact('terms'));
    }

    public function update($id, Request $request){
        $data = Terms::find($id);
        $data->terms = $request->terms; 

        $data->update();
        return redirect('admin/terms');
    }

    public function destroy($id){
        $data = Terms::find($id);
        $data->delete();
        return redirect('admin/terms');
    }
}
