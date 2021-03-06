<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mailUserContact extends Mailable
{
    use Queueable, SerializesModels;
    var $messageObject;

    /**
     * Create a new message instance.
     *
     * @param $messageObject
     */
    public function __construct($messageObject)
    {
        $this->messageObject = $messageObject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        $message = $this->messageObject;
        return $this->from($message->email)
            ->subject('Votre demande a été transmise')
            ->markdown('mails.mailForUserContact')
            ->with([
                'message' => $message
            ]);
    }
}
