<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerAddEditRequest;
use App\Model\Address;
use App\Model\Customer;
use App\Model\Vehicle;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $company_id = auth()->user()->company_id;
        $customers = Customer::all()->where('company_id','=',$company_id);
        return view("customer.customers")->with(['customers' => $customers]);
    }
    public function customerEdit($id){
        $customer = Customer::query()->with('address')->where('address_id','=',$id)->first();
        return view('customer.customerEdit')->with(['customer'=>$customer]);
    }
    public function customerPostEdit(CustomerAddEditRequest $request, $id){
        $customer  = Customer::query()
            ->where('address_id','=',$id)
            ->update([
            'name'        =>$request->input('name'),
            'email'       =>$request->input('email'),
            'phone_number'=>$request->input('phone_number'),
            'company_id'  =>auth()->user()->company_id,
            'address_id'  =>$id
        ]);
        $address = Address::query()->where('id','=',$id)->update([
            'address'  =>$request->input('address'),
            'address_2'=>$request->input('address_2'),
            'city'     =>$request->input('city'),
            'state'    =>$request->input('state'),
            'zip'      =>$request->input('zip')
        ]);

        return redirect('/customers')->with('alert.success','Customer Updated Successfully');
    }
    public function deleteCustomer($id){
        $customer = Customer::find($id);
        $customer->delete();
       return redirect('/customers')->with('alert.success','Customer Deleted Successfully');
    }
    public function customerAdd(){
        return view('customer.customerAdd');
    }

    public function customerRegister(CustomerAddEditRequest $request){
        $company_id = auth()->user()->company_id;
        $address = Address::create([
            'address'  =>$request->input('address'),
            'address_2'=>$request->input('address_2'),
            'city'     =>$request->input('city'),
            'state'    =>$request->input('state'),
            'zip'      =>$request->input('zip')
        ]);
        $customer = Customer::create([
            'name'        =>$request->input('name'),
            'email'       =>$request->input('email'),
            'phone_number'=>$request->input('phone_number'),
            'company_id'  =>$company_id,
            'address_id'  =>$address->id
        ]);
        return redirect('/customers')->with('alert.success','Customer Added Successfully');
    }
}
