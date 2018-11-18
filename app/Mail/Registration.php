<?php

namespace App\Mail;

use App\Model\Company;
use App\Model\Location;
use App\Model\Users;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Registration extends Mailable
{
    public $user;
    public $company;
    public $location;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Users $user, Company $company, Location $location)
    {
        $this->user = $user;
        $this->company = $company;
        $this->location = $location;
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
            'location'  => $this->location,
            'company'   => $this->company,
        ]);
    }
}
