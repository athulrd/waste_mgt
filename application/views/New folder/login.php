<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom styles for this template-->
<link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>public/css/sb-admin.css">

<link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>public/vendor/fontawesome-free/css/all.min.css">
</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
          <form method="post" action="<?php echo site_url('indexoption/login'); ?>">  
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <input class="btn btn-primary btn-block" type="submit" value="Login">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?php echo site_url('indexroute/register'); ?>">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

<script type = 'text/javascript' src = "<?php echo base_url(); 
   ?>public/vendor/jquery/jquery.min.js"></script>

<script type = 'text/javascript' src = "<?php echo base_url(); 
   ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script type = 'text/javascript' src = "<?php echo base_url(); 
   ?>public/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
