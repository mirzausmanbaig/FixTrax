<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
   public function index(){
        return view('vehicle.vehicles');
   }
   public function vehicleCustomer(){
       return view('vehicle.vehicleCustomer');
   }
   public function vehicleEdit(){
       return view('vehicle.vehicleEdit');
   }
    public function vehicleCustomerAdd(){
        return view('vehicle.vehicleCustomerAdd');
    }

}
