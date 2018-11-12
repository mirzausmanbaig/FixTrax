<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Users extends Authenticatable
{
    protected $table = 'users';
    protected $guarded = [];

public function company(){
    return $this->hasOne('\App\Model\Company','id','company_id');
}

}
