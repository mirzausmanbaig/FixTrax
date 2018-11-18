<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Company extends Model
{
    /*@property int                  id
      @property string               name
      @property string               address_id
     *@property \App\Model\Users     users many
     *@property  \App\Model\address  address one
     *@property  \App\Model\Location Locations many
     * @property \App\Model\Customer Customers many
     * */
    protected $table = "company";
    protected $guarded = [];

    public function users(){
        return $this->hasMany('\App\Model\Users','company_id','id');
    }
    public function address(){
        return $this->hasOne('\App\Model\Address','id','address_id');
    }
    public function locations(){
        return $this->hasMany('\App\Model\Location','company_id','id');
    }
    public function customer(){
        return $this->hasMany('\App\Model\Customer','company_id','id');
    }
}
