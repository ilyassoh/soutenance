<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ModifiedDocumentEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $modifiedPath;

    /**
     * Create a new message instance.
     *
     * @param string $modifiedPath
     */
    public function __construct($modifiedPath)
    {
        $this->modifiedPath = $modifiedPath;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.modified_document')
            ->attach(public_path('demandes_effectuees/'.$this->modifiedPath), [
                'as' => '1_demande_analyse_elements_CHNSO.docx',
                'mime' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
            ]);
    }
}
