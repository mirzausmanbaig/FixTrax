<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Usman's FixTrax</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/css/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    @yield('css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/users">FixTrax</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/userProfile/edit/{{auth()->user()->id}}"><i class="fa fa-user fa-fw"></i> {{auth()->user()->name}}</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="/customers"><i class="fa fa-male fa-fw"></i> Customers</a>
                        </li>
                        <li>
                            <a href="/vehicles"><i class="fa fa-car fa-fw"></i> Vehicles</a>
                        </li>
                        <li>
                            <a href="/locations"><i class="fa fa-map-marker fa-fw"></i> Locations</a>
                        </li>
                        <li>
                            <a href="/users"><i class="fa fa-user fa-fw"></i> Users</a>
                        </li>
                        <li>
                            <a href="/settings"><i class="fa fa-wrench fa-fw"></i> Settings</a>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            @if(session()->has('alert.success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{session()->get('alert.success')}}
            </div>
            @endif
                @if(session()->has('alert.danger'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{session()->get('alert.danger')}}
                    </div>
                @endif

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{ implode('', $errors->all(':message')) }}
                </div>
            @endif
            @yield('content')

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/js/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/dataTables.bootstrap.min.js"></script>
    <script src="/js/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>

    @yield('js')

</body>

</html>
