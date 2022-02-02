<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{

    public function store(Request $request)
    {
        $valData = $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'object' => 'required',
                'body' => 'required'
            ]
        );
        $message = Message::create($valData);


        Mail::to('admin@stefanonesi.com')
            ->cc($valData['email'])
            ->send(new ContactFormMail($message));
        return redirect()->back()->with('message', 'Message sent successfully');
        //       $message->save();
    }

    public function contacts()
    {
        return view('guest.contacts.form');
    }
}