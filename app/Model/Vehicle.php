<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Customer as customer;

class Vehicle extends Model
{
    protected $table = "vehicle";

    public function customer(){
        return $this->belongsTo('customer','customer_id','id');
    }
}
