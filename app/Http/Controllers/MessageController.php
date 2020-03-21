<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;



class MessageController extends Controller
{
    public function store()
    {
        // return $request
        //return request();
        $message = request()->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'subject'=>'required',
                'content'=>'required|min:3',
            ]
        );

        mail::to('eulaandres8@gmail.com')->queue(new MessageReceived($message));

        //return new MessageReceived($message);
        // return request('name');
        //return 'Mensaje Enviado';
        //return redirect();
        return back()->with('status','Mensaje recibido, revisa tu casilla de correos.');
    }
}
