<?php

namespace App\Mail;

use App\Model\Company;
use App\Model\Location;
use App\Model\UserEmailVerification;
use App\Model\Users;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Registration extends Mailable
{
    public $user;
    public $userVerify;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Users $user, UserEmailVerification $userVerify)
    {
        $this->user = $user;
        $this->userVerify = $userVerify;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.registration')->with([
            'user'      => $this->user,
            'userVerify'  => $this->userVerify,
        ]);
    }
}
