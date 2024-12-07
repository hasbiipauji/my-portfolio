<?php

namespace App\Http\Controllers;

use App\Mail\contactEmail;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        Mail::to('hasbipauji817@gmail.com')
            ->send(new contactEmail($validate));

        return back()->with('success', 'Pesan telah terkirim');
    }

    public function show(ContactMessage $contact){
        return view('contact.show', compact('contact'));
    }

    public function destroy($id){
        $message = ContactMessage::findOrFail($id);
        $message->delete();

        return back()->with('delete', 'Pesan telah dihapus');
    }
}
