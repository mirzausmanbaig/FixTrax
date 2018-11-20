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
                            <h3 class="panel-title">Update Location</h3>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="/location/edit/{{$location->id}}">
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Name" name="location_name" type="text" value="{{$location->location_name}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Address" name="address" type="text" value="{{$location->address->address}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Address_2" name="address_2" type="text" value="{{$location->address->address_2}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="City" name="city" type="text" value="{{$location->address->city}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="State" name="state" type="text" value="{{$location->address->state}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Zip" name="zip" type="text" value="{{$location->address->zip}}">
                                    </div>
                                    <input type="submit" value="Update Info" class="btn btn-lg btn-danger pull-right">
                                </fieldset>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
      @endsection
