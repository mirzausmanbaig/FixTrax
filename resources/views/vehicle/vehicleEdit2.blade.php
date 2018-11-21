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
                            <h3 class="panel-title">Update Vehicle</h3>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="/vehicle/edit/{{$vehicle->id}}">
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Year" name="year" type="text" value="{{$vehicle->year}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Make" name="make" type="text" value="{{$vehicle->make}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Model" name="model" type="text" value="{{$vehicle->model}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Trim" name="trim" type="text" value="{{$vehicle->trim}}">
                                    </div>
                                    <input type="submit" value="Update Info" class="btn btn-lg btn-danger pull-right">
                                </fieldset>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
      @endsection
