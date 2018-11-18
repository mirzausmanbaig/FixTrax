<?php

namespace App\Http\Controllers;

use App\Model\Customer;
use App\Model\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
   public function index(){
        return view('vehicle.vehicles');
   }
   public function vehicleCustomer($customer_id){
      $a = auth()->user()->company_id;

      $customer = Customer::find($customer_id);
      if ($customer->company_id != $a){
          dd("bad customer id");
      }
      $vehicle = Vehicle::with('customer')->where('customer_id','=',$customer_id)->first();
       return view('vehicle.vehicleCustomer')->with(['vehicle'=>$vehicle]);

   }
   public function vehicleCustomerEdit($id){
       return view('vehicle.vehicleEdit');
   }
    public function vehicleCustomerAdd(){
        return view('vehicle.vehicleCustomerAdd');
    }

}
