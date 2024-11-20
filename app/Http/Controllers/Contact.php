<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\ContactMessage;

class Contact extends Controller
{
    public function submit(Request $request){
        $validate = $request->validate([
            'name'      => 'required|string|max:50',
            'email'     => 'required|email',
            'message'   => 'required|string',
        ]);

        ContactMessage::create($validate);

        return back()->with('success', 'Pesan telah terkirim');
    }
}
