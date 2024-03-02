<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ThankYouMail extends Mailable
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
        return $this->subject('WE HEARTLY THANK YOU FOR CONTACT US')
                    ->view('email.thank_you_email',$this->data);
    }
}
