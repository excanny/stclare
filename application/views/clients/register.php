
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register a User</div>
        <div class="card-body">

			<?php if(validation_errors() != false) { ?>
				<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>Sorry!</strong> <?php echo validation_errors(); ?>
				</div>
			<?php } ?>

          <form action="<?php echo base_url('index.php/user/register_action'); ?>" method="post" style="background: #fff !important;">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="firstName" class="form-control" name="client_name" value="<?php echo set_value('first_name'); ?>" placeholder="Client Name" required="required" autofocus="autofocus">
                    <label for="firstName">Client Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lastName" class="form-control" name="client_id" value="<?php echo set_value('last_name'); ?>" placeholder="Client ID" required="required">
                    <label for="lastName">Client ID</label>
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
            <button type="submit" class="btn btn-primary">Create User</button>
          </form>
          <div class="text-center">
            <!-- <a class="d-block small mt-3" href="<?php echo base_url('/'); ?>">Login Page</a> -->
            <!-- <a class="d-block small" href="forgot-password.html">Forgot Password?</a> -->
          </div>
        </div>
      </div>
    </div>
