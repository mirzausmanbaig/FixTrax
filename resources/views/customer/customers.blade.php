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
                <div class="col-lg-12">
                    <h1 class="page-header">Customers
                    <a class="btn btn-warning btn-labelled pull-right" href="/customer/add">
                        <span class="btn-label">
                            <i class="fa fa-plus-circle"></i>
                        </span>
                        Add Customers
                    </a>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th width="11%"></th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Numbers</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($customers as $data)
                                    <tr class="gradeU">
                                        <td>
                                            <a href="/customer/edit/{{$data->address_id}}" class="btn btn-primary btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a href="/vehicle/customer/{{$data->id}}" class="btn btn-warning btn-xs">
                                                <i class="fa fa-car"></i>
                                            </a>
                                            <a href="/delete/{{$data->id}}" class="btn btn-danger btn-xs">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>

                                        <td>{{$data->name}}</td>
                                        <td>{{$data->email}}</td>
                                        <td>{{$data->phone_number}}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
      @endsection
