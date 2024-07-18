<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Contracts\Queue\ShouldQueue;

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
            subject: 'Nuova Richiesta di Contatto',
        );
    }

    public function content()
    {
        return new Content(
            view: 'emails.sendEmail',
            with: [
                'name' => $this->details['name'],
                'surname' => $this->details['surname'],
                'email' => $this->details['email'],
                'message' => $this->details['message'],
            ]
        );
    }

    public function attachments()
    {
        return [];
    }

    // public function build()
    // {
    //     return $this->subject('New Contact Request')->view('emails.sendEmail');
    // }
}

