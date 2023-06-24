<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class dirRefusMailer extends Mailable
{
    use Queueable, SerializesModels;
    public $email ;
    public $name ;
    public $dname ;

    /**
     * Create a new message instance.
     */
    public function __construct($email, $name , $dname)
    {
        $this->email = $email ;
        $this->name = $name ;
        $this->dname = $dname ;
    }

    public function build()
    {
        return $this->subject('CAC : Demande Refusée .')
            ->view('emails.demande-dir-refus')
            ->with([
                'name' => $this->name,
                'dname' => $this->dname,
            ]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'CAC : Demande Refusée.',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.demande-dir-refus',
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
