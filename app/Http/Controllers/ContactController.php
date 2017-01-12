<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    /**
     * Send the email to the admin
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function send(Request $request)
    {

        $message = $request->input('text');
        $email = $request->input('email');

        Mail::send('email',['testVar'=> $message,'email'=>$email],
            function($message){$message->to('cinemaadimin@gmail.com')->subject(Input::get('subject'));
                $message->from(Input::get('email'), '');
            });

        \Session::flash('success_flash_message', 'Vasa poruka je poslata. Kontaktiracemo Vas uskoro.');


        return redirect()->route('contact');
    }
}
