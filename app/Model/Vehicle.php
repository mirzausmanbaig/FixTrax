<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Customer as Customer;
use App\Model\Location as Location;

class Vehicle extends Model
{
    protected $table = "vehicle";

    public function customer(){
        return $this->belongsTo('Customer','customer_id','id');
    }
    public function location(){
        return $this->hasOne('location','id','location_id');
    }
}
