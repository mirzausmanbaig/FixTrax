<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Address extends Model
{
    protected $table = "address";
    protected $guarded = [];

    public function company(){
        return $this->belongsTo('\App\Model\Company','id','address_id');
    }
    public function location(){
        return $this->belongsTo('\App\Model\Location', 'id','address_id');
    }
    public function customer(){
        return $this->belongsTo('\App\Model\Customer','id', 'address_id');
    }

}
