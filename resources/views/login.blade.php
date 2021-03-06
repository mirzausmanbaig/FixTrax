@extends('layouts.blank')

@section('content')
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="/login">
                            <fieldset>
                                @csrf
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" value="login" class="btn btn-lg btn-success btn-block">
                                <a href="/register" class="btn btn-lg btn-primary btn-block">Register</a>
                                <a href="/forgot">Forgot Password?</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
