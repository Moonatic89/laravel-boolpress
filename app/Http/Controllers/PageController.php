<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\MessageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Models\Message;



class PageController extends Controller
{

    public function contacts()
    {
        return view('guest.contacts.form');
    }


    public function sendForm(Request $request)
    {
        //ddd($request->all());
        $valData = $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'object' => 'required',
                'body' => 'required'
            ]
        );

        /*
            This it to render a mail preview
            return (new ContactFormMail($valData))->render();
        */

        // MessageController->store($valData)

        // Mail::to('admin@stefanonesi.com')
        //     ->cc($valData['email'])
        //     ->send(new ContactFormMail($valData));
        // return redirect()->back()->with('message', 'Message sent successfully');
    }
}