<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;



class Customer extends Model
{
    protected $table = "customer";
    protected $guarded = [];

    public function vehicles(){
        return $this->hasMany('\App\Model\Vehicle','customer_id', 'id');
    }
    public function company(){
        return $this->hasOne('\App\Model\Company','id','company_id');
    }
    public function address(){
        return $this->hasOne('\App\Model\Address', 'id','address_id');
    }
    public function delete()
    {
        try{
            \DB::beginTransaction();
            $this->address->delete();
            Vehicle::query()->whereCustomerId($this->id)->delete();
            $return = parent::delete();
            \DB::commit();
            return $return;
        }catch (\Exception $exception){
            \DB::rollBack();
            throw $exception;
        }
    }

}
