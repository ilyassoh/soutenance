<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class sendCodeMail extends Mailable
{
    use Queueable, SerializesModels;
    public $email ;
    public $code ;
    public $name ;

    /**
     * Create a new message instance.
     */
    public function __construct($email, $code, $name)
    {
        $this->email = $email ;
        $this->code = $code ;
        $this->name = $name ;
    }

    public function build()
    {
        return $this->subject('Welcome to CAC Website')
            ->view('emails.code-verification')
            ->with([
                'name' => $this->name,
                'code' => $this->code,
            ]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'CAC : Code Verification',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.code-verification',
        );
    }
    

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
