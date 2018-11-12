<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Vehicle as Vehicle;
use App\Model\Company as Company;
use App\Model\Address as Address;


class Customer extends Model
{
    protected $table = "customer";
    protected $guarded = [];

    public function vehicle(){
        return $this->hasMany('vehicle','customer_id', 'id');
    }
    public function company(){
        return $this->hasOne('Company','id','company_id');
    }
    public function address(){
        return $this->hasOne('Address', 'id','address_id');
    }

}
