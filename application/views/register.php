
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>St Clare - Register</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url();?>assets/css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">

			<?php if(validation_errors() != false) { ?>
				<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>Sorry!</strong> <?php echo validation_errors(); ?>
				</div>
			<?php } ?>

          <form action="<?php echo base_url('index.php/user/register_action'); ?>" method="post">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="firstName" class="form-control" name="first_name" value="<?php echo set_value('first_name'); ?>" placeholder="First name" required="required" autofocus="autofocus">
                    <label for="firstName">First name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lastName" class="form-control" name="last_name" value="<?php echo set_value('last_name'); ?>" placeholder="Last name" required="required">
                    <label for="lastName">Last name</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" value="<?php echo set_value('email'); ?>" class="form-control" placeholder="Email address" required="required">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" name="pass_word" value="<?php echo set_value('pass_word'); ?>" class="form-control" placeholder="Password" required="required">
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" name="confirm_pass_word" value="<?php echo set_value('confirm_pass_word'); ?>" class="form-control" placeholder="Confirm password" required="required">
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="<?php echo base_url('/'); ?>">Login Page</a>
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
