<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function sendEmail(Request $request) {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];

        Mail::to('begovelik.omsk@gmail.com')->send(new ContactMail($details));

        return back()->with('message_sent', 'Ваше сообщение успешно отправлено!');
    }
}
