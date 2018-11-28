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
                            <h3 class="panel-title">Customer Info</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="/customer/edit/{{$customer->address_id}}">
                                <fieldset>
                                    @csrf
                                    <div class="form-group">
                                        <h5>Name</h5>
                                        <input class="form-control" placeholder="Name" name="name" type="text" value="{{$customer->name}}">
                                    </div>
                                    <div class="form-group">
                                        <h5>Phone Number</h5>
                                        <input class="form-control" placeholder="Phone" name="phone_number" type="text" value="{{$customer->phone_number}}">
                                    </div>
                                    <div class="form-group">
                                        <h5>Email</h5>
                                        <input class="form-control" placeholder="E-Mail" name="email" type="email" value="{{$customer->email}}">
                                    </div>
                                    <div class="form-group">
                                        <h5>Address</h5>
                                        <input class="form-control" placeholder="Address" name="address" type="text" value="{{$customer->address->address}}">
                                    </div>
                                    <div class="form-group">
                                        <h5>Address 2</h5>
                                        <input class="form-control" placeholder="Address 2" name="address_2" type="text" value="{{$customer->address->address_2}}">
                                    </div>
                                    <div class="form-group">
                                        <h5>City</h5>
                                        <input class="form-control" placeholder="City" name="city" type="text" value="{{$customer->address->city}}">
                                    </div>
                                    <div class="form-group">
                                        <h5>State</h5>
                                        <input class="form-control" placeholder="State" name="state" type="text" value="{{$customer->address->state}}">
                                    </div>
                                    <div class="form-group">
                                        <h5>Zip-Code</h5>
                                        <input class="form-control" placeholder="Zip" name="zip" type="text" value="{{$customer->address->zip}}">
                                    </div>
                                    <input type="submit" value="Update Info" class="btn btn-lg btn-danger pull-right">
                                </fieldset>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
      @endsection
