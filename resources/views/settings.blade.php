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
                            <h3 class="panel-title">Company Settings</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Company Name" name="company_name" type="text" value="">
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
                                    <input type="submit" value="Update Info" class="btn btn-lg btn-warning pull-right">
                                </fieldset>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
      @endsection
