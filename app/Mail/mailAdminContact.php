<?php

namespace App\Mail;

use App\Http\Requests\newMessageContactRequest;
use App\Object\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mailAdminContact extends Mailable
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
            ->subject('Nouveau message contact')
            ->markdown('mails.mailForAdminContact')
            ->with([
                'message' => $message
            ]);
    }
}
