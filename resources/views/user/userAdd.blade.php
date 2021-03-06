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
                            <h3 class="panel-title">Add User</h3>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="/user/add">
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Name" name="name" type="text" value="{{request()->old('name')}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email" name="email" type="text" value="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Enter New Password" name="password" type="password" value="">
                                    </div>
                                    <input type="submit" value="New User" class="btn btn-lg btn-success pull-right">
                                </fieldset>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
      @endsection
