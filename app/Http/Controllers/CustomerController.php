<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view('customers');
    }
    public function customerEdit(){
        return view('customeredit');
    }
    public function customerAdd(){
        return view('customeradd');
    }
}
