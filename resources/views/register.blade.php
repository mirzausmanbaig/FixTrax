@extends('layouts.blank')

@section('content')
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign Up</h3>
                    </div>
                    <div class="panel-body">
                        <form action="/register1" method="post">
                            <fieldset>
                                @csrf
                                <legend>User Information</legend>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name" name="name" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <legend>Company Information</legend>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Company Name" name="company_name" type="text" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Location Name" name="location_name" type="text" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Address" name="address" type="text" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Address 2" name="address_2" type="text" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="City" name="city" type="text" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="State" name="state" type="text" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Zip-Code" name="zip" type="text" value="">
                                </div>
                                <input type="submit" value="Sign Up" class="btn btn-lg btn-success ">
                                <a href="/login1" class="btn btn-lg btn-primary ">Login</a>

                            </fieldset>

                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
