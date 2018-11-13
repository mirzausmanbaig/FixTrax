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
                            <form role="form">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Year" name="year" type="text" value="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Make" name="make" type="text" value="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Model" name="model" type="email" value="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Trim" name="trim" type="email" value="">
                                    </div>
                                    <input type="submit" value="Add Vehicle" class="btn btn-lg btn-success pull-right">
                                </fieldset>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
      @endsection
