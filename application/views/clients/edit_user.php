
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Edit a User</div>
        <div class="card-body">

			<?php if(validation_errors() != false) { ?>
				<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>Sorry!</strong> <?php echo validation_errors(); ?>
				</div>
			<?php } ?>

          <form action="<?php echo base_url('index.php/user/update/'. $user->id); ?>" method="post" style="background: #fff !important;">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="firstName" class="form-control" name="first_name" value="<?php echo $user->first_name; ?>" required="required" autofocus="autofocus">
                    <label for="firstName">First name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lastName" class="form-control" name="last_name" value="<?php echo $user->last_name; ?>"  required="required">
                    <label for="lastName">Last name</label>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Update User</button>
          </form>
          <div class="text-center">
            <!-- <a class="d-block small mt-3" href="<?php echo base_url('/'); ?>">Login Page</a> -->
            <!-- <a class="d-block small" href="forgot-password.html">Forgot Password?</a> -->
          </div>
        </div>
      </div>
    </div>
