<?php

namespace App\Http\Controllers;

use App\Model\Address;
use App\Model\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){
        $locations =  Location::with('address')->whereCompanyId(auth()->user()->company_id)->get();
        return view('location.locations')->with(['locations'=>$locations]);
    }
    public function locationEdit($id){
        $location = Location::query()->with('address')->whereId($id)->first();
        return view('location.locationEdit')->with(['location'=>$location]);
    }
    public function locationPostEdit(Request $request, $id){
        $location = Location::find($id);
        $location->location_name = $request->input('location_name');
        $location->save();
        $address = Address::find($location->address_id);
        $address->address   = $request->input('address');
        $address->address_2 = $request->input('address_2');
        $address->city      = $request->input('city');
        $address->state     = $request->input('state');
        $address->zip       = $request->input('zip');
        $address->save();

        return redirect('/locations')->with('alert.success','Location Updated Successfully');
    }
    public function locationAdd(){
        return view('location.locationAdd');
    }
    public function locationPostAdd(Request $request){

        $address = Address::create([
            'address'  =>$request->input('address'),
            'address_2'=>$request->input('address_2'),
            'city'     =>$request->input('city'),
            'state'    =>$request->input('state'),
            'zip'      =>$request->input('zip')
        ]);
        $location = Location::create([
            'location_name'=>$request->input('location_name'),
            'company_id'   =>auth()->user()->company_id,
            'address_id'   =>$address->id
        ]);
        return redirect('/locations')->with('alert.success','Location Added Successfully');

    }
}
