
<?php 
if ($this->session->userdata('message') <> '') {
    echo '<div class="alert alert-dismissable alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong><p><i class="ti ti-check"></i>&nbsp; ' . $this->session->userdata("message") . '</p></strong>
</div>';
}
?>

<?php if ($this->session->userdata('delete') <> '') { ?>

<div class="alert alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<strong>Success!</strong> <?php echo $this->session->userdata("delete"); ?>. 
</div>

<?php } ?>

<?php if ($this->session->userdata('date_search_error') <> '') { ?>

<div class="alert alert-danger alert-dismissible">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<strong>Error!</strong> <?php echo $this->session->userdata("date_search_error"); ?> 
</div>

<?php } ?>

<!-- DataTables Example -->
<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i> &nbsp;
              All Flights  <a href="<?php echo base_url(); ?>index.php/flight/export" class="btn btn-danger btn-sm" style="margin-left:20rem;"><i class="fa fa-download"></i> Download</a>					
			  					<a href="<?php echo base_url(); ?>index.php/flight/create" class="btn btn-primary btn-sm float-right"> Add New</a>
				</div>
            <div class="card-body">

						<div class="">
								<form action="<?php echo base_url(); ?>index.php/flight/dates_search" method="post" class="form-inline">
	
										<div class="form-group mx-auto">
										Search by Dates: &nbsp;
												<input type="text" name="start_date" class="form-control form-control-sm datepicker bg-white mr-1" placeholder="Pick Start Date" readonly="readonly" required>
												<input type="text" name="end_date" class="form-control form-control-sm datepicker bg-white mr-1" placeholder="Pick End Date" readonly="readonly" required>
												<!-- <input type="submit" value="GO" class="btn btn-success btn-sm"> -->
												<button type="submit" class="btn btn-success btn-sm">GO!</button>
										</div>	
														
									</form>
							</div>

              <div class="table-responsive">
                <table class="table table-bordered text-center table-sm" id="dt" width="100%" cellspacing="0">
                  <thead>
                    <tr>
												<th> Passenger Name</th>
												<th>SAP ID</th>
												<th>User ID</th>
												<th>Traveler Type</th>
												<th>Company Code</th>
												<th>Booking date</th>
												<th width="20%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
										<?php 
										foreach ($flights as $flight) { ?>
											<tr>
											<td><?php echo ucfirst(strtolower($flight->passenger_first_name)) .'&nbsp;'. ucfirst(strtolower($flight->passenger_last_name)); ?></td>
											<td><?php echo $flight->sap_id; ?></td>
											<td><?php echo $flight->user_id; ?></td>
											<td><?php echo $flight->traveller_type; ?></td>
											<td><?php echo $flight->company_code; ?></td>
											<td><?php echo date("m/d/Y", strtotime($flight->booking_date)); ?></td>
											<td>
											<form method="DELETE" action="<?php echo base_url('index.php/flight/delete/'. $flight->id);?>">
											<a class="btn btn-success btn-sm" href="<?php echo base_url('index.php/flight/show/'.$flight->id) ?>"> Show </a> 
											<a class="btn btn-warning btn-sm text-white" href="<?php echo base_url('index.php/flight/edit/'.$flight->id) ?>"> Edit </a>
												<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')"> Delete</button>
											</form>
											</td>
											</tr>
										<?php } ?>
                  </tbody>
                </table>

              </div>
          </div>
					<?php if($this->session->userdata['logged_in']['level'] > 0){ ?>
						<div class="card-footer small text-muted">Last modified <?php echo date('l jS \of F Y g:i a', strtotime($flight->updated_at)); ?></div>
					<?php } ?>
				</div>
