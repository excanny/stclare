
<!-- DataTables Example -->
<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-users"></i> &nbsp;
              All Clients
			  <a href="<?php echo base_url(); ?>index.php/user/register" class="btn btn-primary btn-sm float-right"> Add New</a>
			  </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered text-center" id="datatable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
						<th>Client Name</th>
						<th>Client ID</th>
						<th>Email</th>
	
						<th width="20%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
					<?php 
					
					foreach ($users as $user) { ?>
						<tr>
						<td><?php echo ucfirst(strtolower($user->client_name)); ?></td>
						<td><?php echo $user->client_id; ?></td>
						<td><?php echo $user->email; ?></td>
						<td>
						<form method="DELETE" action="<?php echo base_url('index.php/user/delete/'. $user->id);?>">
						<a class="btn btn-success btn-sm" href="<?php echo base_url('index.php/user/show/'. $user->id) ?>"> Show </a> 
						<a class="btn btn-warning btn-sm text-white" href="<?php echo base_url('index.php/user/edit/'. $user->id) ?>"> Edit </a>
							<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')"> Delete</button>
						</form>
						</td>
						</tr>
					<?php } ?>
                  </tbody>
                </table>

              </div>
            </div>
            <div class="card-footer small text-muted">Last updated <?php echo date('l jS \of F Y g:i a', strtotime($user->updated_at)); ?></div>
          </div>

        </div>
