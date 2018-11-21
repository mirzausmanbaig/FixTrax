<?php

namespace App\Http\Controllers;

use App\Model\Customer;
use App\Model\Location;
use App\Model\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
   public function index(){
     $vehicle = Vehicle::with(['customer'=>function($query){
         $query->where('company_id','=',auth()->user()->company_id);
     }])->get();
       return view('vehicle.vehicles')->with(['vehicle'=>$vehicle]);
   }
   public function vehicleCustomer($customer_id){
      $a = auth()->user()->company_id;

      $customer = Customer::find($customer_id);
      if ($customer->company_id != $a){
          dd("bad customer id");
      }

       return view('vehicle.vehicleCustomer')->with(['customer'=>$customer]);

   }
   public function vehicleCustomerEdit($id){
        $vehicle = Vehicle::find($id);
       return view('vehicle.vehicleEdit')->with(['vehicle'=>$vehicle]);
   }

   public function vehicleCustomerPostEdit(Request $request,$id){
       $vehicle = Vehicle::find($id);
       $vehicle->year = $request->input('year');
       $vehicle->make=$request->input('make');
        $vehicle->model=$request->input('model');
        $vehicle->trim=$request->input('trim');
        $vehicle->save();

       return redirect('/vehicle/customer/'.$vehicle->customer_id);
   }
    public function vehicleCustomerAdd($id){
       $customer = Customer::find($id);
        return view('vehicle.vehicleCustomerAdd')->with(['customer'=>$customer]);
    }
    public function  vehicleCustomerPostAdd(Request $request, $customer_id){
       $customer = Customer::find($customer_id);
       $vehicle = Vehicle::create([
           'year'=>$request->input('year'),
           'make'=>$request->input('make'),
           'model'=>$request->input('model'),
           'trim'=>$request->input('trim'),
           'customer_id'=>$customer_id,
           'location_id'=>$customer->location
       ]);
       return redirect('/vehicle/customer/'.$customer_id);

    }

}
