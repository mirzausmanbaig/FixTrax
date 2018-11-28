@extends('layouts.blank')

@section('content')
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign Up</h3>
                    </div>
                    <div class="panel-body">
                        <form action="/register" method="post">
                            <fieldset>
                                @csrf
                                <legend>User Information</legend>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name" name="name" type="text" value="{{request()->old('name')}}">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <legend>Company Information</legend>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Company Name" name="company_name" type="text" value="{{request()->old('company
                                    _name')}}">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Location Name" name="location_name" type="text" value="{{request()->old('location_name')}}">
                                </div>
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
                                    <input class="form-control" placeholder="Zip-Code" name="zip" type="text" value="{{request()->old('zip')}}">
                                </div>
                                <input type="submit" value="Sign Up" class="btn btn-lg btn-success ">
                                <a href="/login" class="btn btn-lg btn-primary ">Login</a>

                            </fieldset>

                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
