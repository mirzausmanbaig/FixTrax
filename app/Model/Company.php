<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Users as Users;
use App\Model\Address as Address;
use App\Model\Location as Location;
use App\Model\Customer as Customer;

class Company extends Model
{
    protected $table = "company";
    public function users(){
        return $this->hasMany('Users','company_id','id');
    }
    public function address(){
        return $this->hasOne('Address','id','address_id');
    }
    public function location(){
        return $this->hasMany('Location','company_id','id');
    }
    public function customer(){
        return $this->hasMany('Customer','company_id','id');
    }
}
