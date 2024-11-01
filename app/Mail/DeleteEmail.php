<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DeleteEmail extends Mailable
{
    use Queueable, SerializesModels;

  public $name;
   
    public $start_date;
   
    /**
     * Create a new message instance.
     *
     * @param string $name
     * @param string $lien
     * @param string $start_date
     * @param string $question
     * @return void
     */
    public function __construct($name, $start_date)
    {
        $this->name = $name;
   
        $this->start_date = $start_date;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Réunion supprimée')
                    
                     ->view('email/delete-event')
                    ->with([
                        'name' => $this->name,
                       
                        'start_date' => $this->start_date,
                        
                    ]);
    }
}
