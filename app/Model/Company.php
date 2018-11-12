<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Company extends Model
{
    protected $table = "company";
    protected $guarded = [];

    public function users(){
        return $this->hasMany('\App\Model\Users','company_id','id');
    }
    public function address(){
        return $this->hasOne('\App\Model\Address','id','address_id');
    }
    public function location(){
        return $this->hasMany('\App\Model\Location','company_id','id');
    }
    public function customer(){
        return $this->hasMany('\App\Model\Customer','company_id','id');
    }
}
