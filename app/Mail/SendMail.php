<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'My Test Email',
        );
    }

    public function content()
    {
        return new Content(
            view: 'view.name',
            with: [
                'name' => $this->details->name,
                'surname' => $this->details->surname,
                'email' => $this->details->email,
                'message' => $this->details->message,
            ]
        );
    }

    public function attachments()
    {
        return [];
    }

    public function build()
    {
        return $this->subject('New Contact Request')->view('emails.sendEmail');
    }
}

