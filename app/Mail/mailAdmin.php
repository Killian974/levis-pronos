<?php

namespace App\Mail;

use App\Http\Requests\newUserNewletterRequest;
use App\Object\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mailAdmin extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build(newUserNewletterRequest $request)
    {
        $emailNewUser = $request->input('email');
        return $this->from($emailNewUser)
            ->subject('Nouvel utilisateur demandant des pronostiques')
            ->markdown('mails.mailForAdmin')
            ->with([
                'email' => $emailNewUser
            ]);
    }
}
