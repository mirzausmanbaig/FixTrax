<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Model\Company as Company;

class Users extends Authenticatable
{
    protected $table = 'users';
    protected $guarded = [];

public function company(){
    return $this->hasOne('Company','id','company_id');
}

}
