<?php

namespace App\Http\Controllers;

use App\Mail\Registration;
use App\Model\Address;
use App\Model\Company;
use App\Model\Customer;
use App\Model\Location;
use App\Model\Users;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function login(){
        return view('login');
    }
    public function logout(){
        auth()->logout();
        return redirect('/login');
    }
    public function register(){
        return view('register');
    }
    public function index(){
        $users = Users::all()->where('company_id','=', auth()->user()->company_id);
        return view('user.users')->with(['users'=>$users]);
    }
    public function edit($id){
        $user = Users::find($id);
        return view('user.userEdit')->with(['user'=>$user]);
    }
    public function postEdit(Request $request, $id){
        $user = Users::find($id);
        if ($user->password = $request->input('old_password')){
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->save();
            auth()->logout();
            return redirect('/login1');
        }else{
            dd("wrong password please try again");
        }

    }
    public function add(){
        return view('user.userAdd');
    }
    public function postAdd(Request $request){
        $user = Users::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password')),
            'company_id'=>auth()->user()->company_id
        ]);
        return redirect('/users');
    }
    public function deleteUser($id){
        $user = Users::find($id);
        $user->delete();
        return redirect('/users');
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
