<?php

namespace App\Http\Controllers;

use App\Mail\Password;
use App\Mail\Registration;
use App\Model\Address;
use App\Model\Company;
use App\Model\Customer;
use App\Model\Location;
use App\Model\UserEmailVerification;
use App\Model\Users;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{
    public function login(){
        return view('login');
    }
    public function postLogin(Request $request){
        $email    = $request->input('email');
        $password = $request->input('password');

        if (auth()->attempt(['email'=>$email,'password'=>$password])){
            $user = Users::query()
                ->where('email', '=', $email)
                ->first();
            auth()->login($user);
            return redirect('/customers');
        }else{
            dd('enter right info');
        }

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
           $str = str_random(8);
           $user = Users::find($id);
           $user->name = $request->input('name');
           $user->password = $str;
           $user->save();

           \Mail::to($user->email)->queue(new Password($user, $str));
           return redirect('/users')->with('alert.success','Password Sent Successfully. Please check you E-Mail');
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
        return redirect('/users')->with('alert.success','User Added Successfully');
    }
    public function deleteUser($id){
        $user = Users::find($id);
        $user->delete();
        return redirect('/users')->with('alert.success','User Deleted Successfully');
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
        $str = str_random(32);
        $userVerify = UserEmailVerification::create([
            'string' => $str,
            'user_id'=>$user->id
        ]);

       \Mail::to($user->email)->queue(new Registration($user, $userVerify));
       auth()->login($user);
       return redirect('/customers');

    }

    public function verify($string){
        $userVerify = UserEmailVerification::query()->where('string','=',$string)->first();
        $user = Users::find($userVerify->user_id);
        $user->email_verified_at = date('Y-m-d H:i:s');
        $user->save();
        return redirect('/customers')->with('alert.success','Welcome to FixTrax');
    }

    public function resendVerification(){
        $user = Users::find(auth()->user()->id);
        $userVerify = UserEmailVerification::query()->where('user_id','=',auth()->user()->id)->first();
        \Mail::to($user->email)->queue(new Registration($user, $userVerify));
        return redirect('/resend')->with('alert.success','Email Verification Sent Successfully');
    }

    public function userProfileEdit($id){
        $user = Users::find($id);
        return view('user.userProfileEdit')->with(['user'=>$user]);
    }
    public function userProfilePostEdit(Request $request,$id){
        $user = Users::find($id);
        if($user->password != $request->input(['old_password'])){
            dd("enter right password");
        }
        $user->name = $request->input(['old_name']);
        $user->password = Hash::make($request->input(['new_password']));
        $user->save();
        auth()->logout();
        return redirect('/login');
    }
}
