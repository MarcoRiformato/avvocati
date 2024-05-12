<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $details = [
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'message' => $request->message
        ];

        Mail::to('praversilia@gmail.com')->send(new SendMail($details));
        return response()->json(['message' => 'Email successfully sent']);
    }
}