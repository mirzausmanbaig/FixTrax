<?php

namespace App\Http\Controllers;

use App\Model\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(){
        $Add = Address::all();
        return view('login',['Add'=> $Add]);
    }
}
