<?php

namespace App\Http\Controllers;

use App\Mail\Registration;
use App\Model\Address;
use App\Model\Company;
use App\Model\Customer;
use App\Model\Location;
use App\Model\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
    public function index(){
        return view('users');
    }
    public function postRegister(Request $request){
       $addressCompany = Address::create([
            'address'=>$request->input('address'),
            'address_2'=>$request->input('address'),
            'city'=>$request->input('city'),
            'state'=>$request->input('state'),
            'zip'=>$request->input('zip')
        ]);
        $company =  Company::create([
            'company_name'=>$request->input('company_name'),
            'address_id'=>$addressCompany->id
        ]);
        $addressLocation= Address::create([
            'address'=>$request->input('address'),
            'address_2'=>$request->input('address'),
            'city'=>$request->input('city'),
            'state'=>$request->input('state'),
            'zip'=>$request->input('zip')
        ]);
        $location = Location::create([
            'location_name'=>$request->input('location_name'),
            'address_id'=>$addressLocation->id,
            'company_id'=>$company->id
        ]);

        $user = Users::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password')),
            'company_id'=>$company->id
        ]);

       //\Mail::to($user->email)->queue(new Registration($user, $company, $location));
       auth()->login($user);
       return redirect('/customers');

    }
}
