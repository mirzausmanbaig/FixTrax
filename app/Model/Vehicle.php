<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Vehicle extends Model
{
    protected $table = "vehicle";
    protected $guarded = [];

    public function customer(){
        return $this->belongsTo('\App\Model\Customer','customer_id','id');
    }
    public function location(){
        return $this->hasOne('\App\Model\Location','id','location_id');
    }
}
