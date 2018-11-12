<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Company as Company;
use App\Model\Location as Location;
use App\Model\Customer as Customer;

class Address extends Model
{
    protected $table = "address";

    public function company(){
        return $this->belongsTo('Company','id','address_id');
    }
    public function location(){
        return $this->belongsTo('Location', 'id','address_id');
    }
    public function customer(){
        return $this->belongsTo('Customer','id', 'address_id');
    }

}
