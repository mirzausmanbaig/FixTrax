<?php

namespace App\Http\Controllers;

use App\Model\Users;
use Illuminate\Http\Request;

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
    public function postController(Request $request){
        $user = Users::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'phone_number'=>$request->input('phone_number'),
        ]);

    }
}
