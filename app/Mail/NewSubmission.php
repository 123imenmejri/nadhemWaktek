<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class NewSubmission extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $lien;
    public $start_date;
    public $Durée;
    /**
     * Create a new message instance.
     *
     * @return void
     */
     public function __construct($name,$lien,$start_date,$Durée)
    {
        $this->name = $name;
        $this->start_date = $start_date;
        $this->lien = $lien;
        $this->Durée=$Durée;
    }
    

    public function build()
    {
        return $this->view('email/send-email')
                    ->with([
                        'name' => $this->name,
                        'lien'=> $this->lien,
                        'start_date'=>$this->start_date,   
                       'Durée'=> $this->Durée,
                    ]);
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Nouveau réunion',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'email/send-email',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
