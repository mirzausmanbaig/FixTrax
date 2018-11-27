<?php

namespace App\Http\Controllers;

use App\Model\Address;
use App\Model\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function index(){
        $company = Company::with('address')->whereId(auth()->user()->company_id)->first();
        return view('settings')->with(['company'=>$company]);
    }
    public function edit(Request $request,$id){
        $company = Company::find($id);
        $company->company_name = $request->input('company_name');
        $company->save();

        $address = Address::find($company->address_id);
        $address->address = $request->input('address');
        $address->address_2 = $request->input('address_2');
        $address->city = $request->input('city');
        $address->state = $request->input('state');
        $address->zip = $request->input('zip');
        $address->save();
        return redirect('/customers')->with('alert.success','Company updated successfully');
    }
}
