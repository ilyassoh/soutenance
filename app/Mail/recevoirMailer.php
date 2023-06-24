<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class recevoirMailer extends Mailable
{
    use Queueable, SerializesModels;
    public $email ;
    public $name ;
    public $phone ;
    public $message ;

    /**
     * Create a new message instance.
     */
    public function __construct($email, $phone, $name , $message)
    {
        $this->email = $email ;
        $this->phone = $phone ;
        $this->name = $name ;
        $this->message = $message ;
    }

    public function build()
    {
        return $this->subject('CAC : Contact Message.')
            ->view('emails.recevoire-message')
            ->with([
                'phone' => $this->phone,
                'name' => $this->name,
                'messagee' => $this->message,
                'email' => $this->email,
            ]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'CAC : Contact Message.',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.recevoire-message',
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
