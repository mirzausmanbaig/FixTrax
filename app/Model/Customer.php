<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;



class Customer extends Model
{
    protected $table = "customer";
    protected $guarded = [];

    public function vehicle(){
        return $this->hasMany('\App\Model\Vehicle','customer_id', 'id');
    }
    public function company(){
        return $this->hasOne('\App\Model\Company','id','company_id');
    }
    public function address(){
        return $this->hasOne('\App\Model\Address', 'id','address_id');
    }

}
