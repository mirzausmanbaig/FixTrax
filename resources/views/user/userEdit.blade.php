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
                            <h3 class="panel-title">Update User</h3>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="/user/edit/{{$user->id}}">
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Name" name="name" type="text" value="{{$user->name}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" disabled="" placeholder="Email" name="email" type="text" value="{{$user->email}}">
                                    </div>
                                    <input type="submit" value="Send Random Password" class="btn btn-lg btn-danger pull-right">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
      @endsection
