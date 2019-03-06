
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>St Clare CRM - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url();?>assets/css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">

            <?php 
              if ($this->session->userdata('reg_success') <> '') {
                echo '<div class="alert alert-dismissable alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <strong><p><i class="ti ti-check"></i>&nbsp; ' . $this->session->userdata("reg_success") . '</p></strong>
              </div>';
              }
              ?>
              <?php if(validation_errors() != false) { ?>
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Sorry!</strong> <?php echo validation_errors(); ?>
                </div>
              <?php } ?>
              
              <?php 
              if ($this->session->userdata('login_error') <> '') {
                echo '<div class="alert alert-dismissable alert-danger">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <strong><p><i class="ti ti-check"></i>&nbsp; ' . $this->session->flashdata('login_error') . '</p></strong>
              </div>';
              }
              ?>
			
          <form action="<?php echo base_url('index.php/user/login_action'); ?>" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" name="pass_word" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <!-- <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div> -->
			<button type="submit" class="btn btn-primary">Login</button>
          </form>
          <div class="text-center">
            
            <!-- <a class="d-block small" href="forgot-password.html">Forgot Password?</a> -->
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
