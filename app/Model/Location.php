<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Location extends Model
{
    protected $table = "location";
    protected $guarded = [];

    public function company(){
        return $this->belongsTo('\App\Model\Address','company_id','id');
    }

    public function address(){
        return $this->hasOne('\App\Model\Company ','id','address_id');
    }
    public function vehicle(){
        return $this->hasMany('\App\Model\Vehicle','location_id','id');
    }
}
