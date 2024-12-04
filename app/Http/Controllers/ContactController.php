<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $message = ContactMessage::all();

        return view('contact.index', compact('message'));
    }
    public function store (Request $request){
        $validate = $request->validate([
            'name'      => 'required|string|max:50',
            'email'     => 'required|email',
            'message'   => 'required|string',
        ]);

        ContactMessage::create($validate);

        return back()->with('success', 'Pesan telah terkirim');
    }

    public function destroy($id){
        $message = ContactMessage::findOrFail($id);
        $message->delete();

        return back()->with('delete', 'Pesan telah dihapus');
    }
}
