<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class nonRealisableMailer extends Mailable
{
    use Queueable, SerializesModels;
    public $email ;
    public $commentaire ;
    public $name ;
    public $dname ;
    /**
     * Create a new message instance.
     */
    public function __construct($email, $commentaire, $name , $dname)
    {
        $this->email = $email ;
        $this->commentaire = $commentaire ;
        $this->name = $name ;
        $this->dname = $dname ;
    }

    public function build()
    {
        return $this->subject('CAC : Demande Réfusée .')
            ->view('emails.demande-nonRealisable')
            ->with([
                'commentaire' => $this->commentaire,
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
            subject: 'CAC : Demande Réfusée .',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.demande-nonRealisable',
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
