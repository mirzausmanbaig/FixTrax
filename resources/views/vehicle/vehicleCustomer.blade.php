@extends('layouts.main')
        @section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">{{$customer->name}}'s Vehicles
                        <a class="btn btn-warning pull-right" href="/vehicle/customer/add/{{$customer->id}}">
                        <span class="btn-label">
                            <i class="fa fa-plus-circle"></i>
                        </span>
                            Add Vehicle
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
                                        <th width="7%"></th>
                                        <th>Year</th>
                                        <th>Make</th>
                                        <th>Model</th>
                                        <th>Trim</th>
                                        <th>Customer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($customer->vehicles as $vehicle)
                                    <tr class="gradeU">
                                        <td>
                                            <a href="/vehicle/customer/edit/{{$vehicle->id}}" class="btn btn-primary btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a href="/vehicle/customer/delete/{{$vehicle->id}}" class="btn btn-danger btn-xs">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                        <td>{{$vehicle->year}}</td>
                                        <td>{{$vehicle->make}}</td>
                                        <td>{{$vehicle->model}}</td>
                                        <td>{{$vehicle->trim}}</td>
                                        <td>{{$customer->name}}</td>
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
