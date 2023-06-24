<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class realisableMailer extends Mailable
{
    use Queueable, SerializesModels;
    public $email ;
    public $rdv ;
    public $name ;
    public $dname ;

    /**
     * Create a new message instance.
     */
    public function __construct($email, $rdv, $name , $dname)
    {
        $this->email = $email ;
        $this->rdv = $rdv ;
        $this->name = $name ;
        $this->dname = $dname ;
    }

    public function build()
    {
        return $this->subject('CAC : Demande Acceptée .')
            ->view('emails.demande-realisable')
            ->with([
                'rdv' => $this->rdv,
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
            subject: 'CAC : Demande Acceptée .',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.demande-realisable',
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
