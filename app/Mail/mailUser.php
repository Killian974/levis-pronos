<?php

namespace App\Mail;

use App\Http\Requests\newUserNewletterRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mailUser extends Mailable
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
            ->subject("Nos derniers pronostiques ! LEVIS PRONOS")
            ->markdown('mails.mailForUser')
            ->with([
                'email' => $emailNewUser
            ]);
    }
}
