<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>AEOMS | ASCOT Extention Operational Management System</title>

        @section('css-top')
        @show

        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{asset_url()}}plugins/font-awesome/css/all.min.css">
        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="{{asset_url()}}plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
        <!-- Toastr -->
        <link rel="stylesheet" href="{{asset_url()}}plugins/toastr/toastr.min.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="{{asset_url()}}plugins/select2/css/select2.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset_url()}}css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
         <!-- WHIRL -->
         <link rel="stylesheet" href="{{asset_url()}}plugins/whirl/whirl.min.css">

         

        @section('css-bot')
        @show

    </head>
<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container-fluid">

                <a href="#" class="navbar-brand">
                    <span class="brand-text font-weight-light">ASCOT Extention Operational Management System (AEOMS)</span>
                </a>
               
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{base_url()}}admin/training" title="Sign Out"><i class="fas fa-university"></i> Trainings</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{base_url()}}admin/speaker" title="Sign Out"><i class="fas fa-user-tie"></i> Speakers</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{base_url()}}admin/student" title="Sign Out"><i class="fas fa-users"></i> Students</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{base_url()}}admin/setting" title="Sign Out"><i class="fas fa-cogs"></i> Settings</a>
                    </li>

                    <li class="nav-item">
                        <span class="nav-link">|</span>
                    </li>

                   

                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                          <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" title="Sign Out"><i class="fas fa-sign-out-alt"></i></a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"> @yield('page-title') </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            @section('page-bread')
                            @show
                        </div><!-- /.col -->
                    </div>
                </div>
            </div>

            
            <div class="content">
                <div class="container-fluid">
                    @if($this->session->flashdata('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-check"></i> Success!</h5>
                            {{ $this->session->flashdata('success') }}
                      </div>
                    @endif
                    @if($this->session->flashdata('error'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-ban"></i> Error!</h5>
                            {{ $this->session->flashdata('error') }}
                        </div>
                    @endif
                 @section('content')
                 @show
                </div>
            </div>
            
        </div>

        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Developed By: JMPRNS
            </div>
            <!-- Default to the left -->
            ASCOT Extention Operational Management System
        </footer>
    </div>
   
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{asset_url()}}plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset_url()}}plugins/bootstrap/bootstrap.bundle.min.js"></script>

    
    <!-- SweetAlert2 -->
    <script src="{{asset_url()}}plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="{{asset_url()}}plugins/toastr/toastr.min.js"></script>

    <!-- Select2 -->
    <script src="{{asset_url()}}plugins/select2/js/select2.full.min.js"></script>

    @section('js-top')
    @show

    <!-- AdminLTE App -->
    <script src="{{asset_url()}}js/adminlte.min.js"></script>


    <script>
        $(function () {
          //Initialize Select2 Elements
          $('.select2').select2({
            placeholder: "Select from list"
          })
        })
    </script>

    @section('js-bot')
    @show
</body>
</html>