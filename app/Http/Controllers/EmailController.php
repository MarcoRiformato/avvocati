<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Inertia\Inertia;

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

        Mail::to('marco.riformato@gmail.com')->send(new SendMail($details));
        return Inertia::render('YourComponent', [
            'message' => 'Email inviata'
        ]);
    }
}