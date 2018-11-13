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
                    <h1 class="page-header">Locations
                    <a class="btn btn-warning btn-labelled pull-right">
                        <span class="btn-label">
                            <i class="fa fa-plus-circle"></i>
                        </span>
                        Add Location
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
                                        <th width="4%"></th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Address 2</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Zip Code</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td>
                                            <a href="#" class="btn btn-primary btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                        </td>
                                        <td>All others</td>
                                        <td>All others</td>
                                        <td>All others</td>
                                        <td>All others</td>
                                        <td>All others</td>
                                        <td>All others</td>
                                    </tr>
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