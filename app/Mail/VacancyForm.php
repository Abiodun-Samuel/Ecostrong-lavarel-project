<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VacancyForm extends Mailable
{
    use Queueable, SerializesModels;
      protected $applicants;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $applicants=[])
    {
        $this->applicants = $applicants;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Application Form Submitted')
        ->view('emails.ApplicantsMail')->with('applicants', $this->applicants)
        ->attach($this->applicants['cv']->getRealPath(),[
           'as' => $this->applicants['cv']->getClientOriginalName(),
           'mine' => $this->applicants['cv']->getClientMimeType(),
        ]);
    }
}
