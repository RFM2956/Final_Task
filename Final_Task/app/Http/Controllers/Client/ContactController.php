<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function send(ContactRequest $request){
        $validatedData = $request->validate([
            'con_name' => 'required',
            'con_email' => 'required|email',
            'con_phone' => 'nullable|numeric',
            'con_message' => 'nullable',
        ]);

        Mail::to('ulvina@code.edu.az')->send(new ContactMail($validatedData));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');

    }
}
