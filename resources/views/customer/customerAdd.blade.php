@extends('layouts.main')
    @section('css')
        <style>
            #pan{
                background-color: darkred;
            }
        </style>
    @endsection
        @section('content')
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Add Customers</h3>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="/customer/add">
                                <fieldset>
                                    @csrf
                                    <legend>Add Customers</legend>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Name" name="name" type="text" value="{{request()->old('name')}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Phone" name="phone_number" type="text" value="{{request()->old('phone_number')}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-Mail" name="email" type="email" value="{{request()->old('email')}}">
                                    </div>
                                    <legend>Address</legend>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Address" name="address" type="text" value="{{request()->old('address')}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Address 2" name="address_2" type="text" value="{{request()->old('address_2')}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="City" name="city" type="text" value="{{request()->old('city')}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="State" name="state" type="text" value="{{request()->old('state')}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Zip" name="zip" type="text" value="{{request()->old('zip')}}">
                                    </div>
                                    <input type="submit" value="Add Customers" class="btn btn-lg btn-success pull-right">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
      @endsection
