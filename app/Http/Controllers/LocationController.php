<?php

namespace App\Http\Controllers;

use App\Model\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){
        $locations =  Location::with('address')->whereCompanyId(auth()->user()->company_id)->get();
        return view('location.locations')->with(['locations'=>$locations]);
    }
}
