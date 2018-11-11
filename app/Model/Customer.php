<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";

    public function vehicle(){
        return $this->hasMany('vehicle','customer_id', 'id');
    }
}
