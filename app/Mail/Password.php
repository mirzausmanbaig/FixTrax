<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Password extends Mailable
{
    public $user;
    public $str;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $str)
    {
        $this->user = $user;
        $this->str= $str;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.userNewPassword')->with([
            'user'=>$this->user,
            'str'=>$this->str
        ]);
    }
}
