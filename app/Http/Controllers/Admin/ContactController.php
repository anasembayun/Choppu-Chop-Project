<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.contact.index', compact('contacts'));
    }

    public function create(){
        return view('admin.contact.create');
    }

    public function store(Request $request){
        $data = new Contact;
        $data->outlet_id = $request->outlet_id;
        $data->name = $request->name; 
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        $data->save();
        return redirect('admin/contact');
    }

    public function destroy($id){
        $data = Contact::find($id);
        $data->delete();
        return redirect('admin/contact');
    }
}
