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
                            <h3 class="panel-title">Add Vehicle</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/vehicle/add/" method="post">
                                <fieldset>
                                    @csrf
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Year" name="year" type="text" value="{{request()->old('year')}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Make" name="make" type="text" value="{{request()->old('make')}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Model" name="model" type="text" value="{{request()->old('model')}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Trim" name="trim" type="text" value="{{request()->old('trim')}}">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="location">
                                            <option>Select location</option>
                                            @foreach($location as $data)
                                                <option value="{{$data->id}}">{{$data->location_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="customer">
                                            <option>Select Customer</option>
                                            @foreach($customer as $data)
                                                <option value="{{$data->id}}">{{$data->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <input type="submit" value="Add Vehicle" class="btn btn-lg btn-success pull-right">
                                </fieldset>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
      @endsection
