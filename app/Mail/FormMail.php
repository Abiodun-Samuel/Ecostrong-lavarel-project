<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $formDetails;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($formDetails=[])
    {
        $this->formDetails = $formDetails; 

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->subject('Registration Form Submitted')
        ->view('emails.FormMail')->with('formDetails', $this->formDetails);
       
    }
}