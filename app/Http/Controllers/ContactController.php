<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        Mail::raw($request->message, function ($message) use ($request) {
            $message->to('ranabagaskara565@gmail.com')
                ->subject($request->subject)
                ->replyTo($request->email);
        });

        return back()->with('success', 'Email berhasil dikirim!');
    }
}
