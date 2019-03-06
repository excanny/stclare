
<section class="card ">
<div class="card-header">
	<i class="fa fa-user"></i> &nbsp; <strong><?php echo strtoupper($user->first_name . "\t" . $user->last_name) . '\'s'; ?></strong> Details
<a href="<?php echo base_url(); ?>index.php/user/all_users" class="btn btn-primary btn-sm float-right">	<< All Users</a>
  </div>
	<div class="container">
		<div class="row text-center py-5">
		  <div class="col-lg-3">
			<p><strong>Full Name</strong></p>
			<p><?php echo $user->first_name .'&nbsp;' . $user->last_name; ?></p>
		  </div>
		  <div class="col-lg-3">
			<p><strong>Email</strong></p>
			<p><?php echo $user->email; ?></p>
		  </div>
		  <div class="col-lg-3">
			<p><strong>User Level</strong></p>
			<p><?php if($user->user_level == 0){echo "User";}elseif($user->user_level == 1){echo "Admin";} ?></p>
		  </div>
			<?php if($this->session->userdata['logged_in']['level'] == 2){ ?>
					<div class="col-lg-3">
					
						<p><strong>Change User Level</strong></p>
						<p>
						<?php 
							if($user->user_level == 0){ ?>
								<form action="<?php echo base_url("index.php/user/make_moderator/" . $user->id); ?>" method="post">
										<input type="submit" class="btn btn-primary btn-sm" value="Make a Moderator" onclick="return confirm('Are you sure?')">
								</form>
								<?php } ?>
								<?php if($user->user_level == 1) { ?>
									<form action="<?php echo base_url("index.php/user/remove_moderator/" . $user->id); ?>" method="post">
										<input type="submit" class="btn btn-danger btn-sm" value="Remove as Moderator" onclick="return confirm('Are you sure?')">
								</form>
								<?php } ?>
					</div>
		  <?php } ?>
		</div>
	</div>
</section>
