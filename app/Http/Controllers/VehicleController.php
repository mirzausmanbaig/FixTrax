<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
   public function index(){
        return view('vehicles');
   }
   public function vehicleCustomer(){
       return view('vehiclecustomer');
   }
   public function vehicleEdit(){
       return view('vehicleedit');
   }
}
