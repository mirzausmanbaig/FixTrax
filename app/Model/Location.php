<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Address as Address;
use App\Model\Company as Company;
use App\Model\Vehicle as Vehicle;

class Location extends Model
{
    protected $table = "location";

    public function company(){
        return $this->belongsTo('Company','company_id','id');
    }

    public function address(){
        return $this->hasOne('Address','id','address_id');
    }
    public function vehicle(){
        return $this->hasMany('vehicle','location_id','id');
    }
}
