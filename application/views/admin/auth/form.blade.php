
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AEOMS | ASCOT Extention Operational Management System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

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

 
</head>
<body class="hold-transition login-page">
<div class="login-box" style="margin-top: -30vh">
  <div class="login-logo">
    <h1 class="text-primary">AEOMS</h1>
    <h4 class="">ASCOT Extention Operational Management System</h4>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form id="login-form" action="{{ current_url() }}" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <div class="col-12">
            <button type="submit" class="btn btn-primary bg-gradient-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

   

    
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{asset_url()}}plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset_url()}}plugins/bootstrap/bootstrap.bundle.min.js"></script>

    
    <!-- SweetAlert2 -->
    <script src="{{asset_url()}}plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="{{asset_url()}}plugins/toastr/toastr.min.js"></script>

    <!-- AdminLTE App -->
    <script src="{{asset_url()}}js/adminlte.min.js"></script>

    <script>



    $('#login-form').submit(function(e) { 

        e.preventDefault();

        var jqxhr = $.post("{{ base_url() }}admin/login", $( "#login-form" ).serialize() , function() {

            window.location = '{{ base_url() }}admin/dashboard';
            console.log(data);

        })
        .fail(function(data) {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: data.responseJSON.text
            });
            $('#password').val('');
        });
        
    }); 


    </script>
</body>
</html>
