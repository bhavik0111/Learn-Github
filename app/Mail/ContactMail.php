<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct($details)
    {
        $this->data = $details;
    }

    public function build()
    {
        return $this->subject('VISHWAKARMA FURNITURE WORK CONTACT INQUIRY')
                    ->view('email.contact_us_email',$this->data);
    }
}
