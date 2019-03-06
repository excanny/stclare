<!-- DataTables Example -->
<div class="card mb-3">
            <div class="card-header">
              <div class="row">
										<div class="col-lg-6"><i class="fas fa-table"></i> &nbsp;  All Flights <a href="<?php echo base_url(); ?>index.php/flight/dateExport" class="btn btn-danger btn-sm"><i class="fa fa-download"></i> Download</a></div>
									
										<div class="col-lg-6">
										<a href="<?php echo base_url(); ?>index.php/flight" class="btn btn-primary btn-sm float-right"> << Back To All Flights</a>
										</div>
								</div>
			 
			  </div>
            <div class="card-body">

						<div class="">
								<form action="<?php echo base_url(); ?>index.php/flight/dates_search" method="post" class="form-inline">
	
										<div class="form-group mx-auto">
										Search by Dates: &nbsp;
												<input type="text" name="start_date" class="form-control form-control-sm datepicker bg-white mr-1" placeholder="Pick Start Date Date" readonly="readonly"  required>
												<input type="text" name="end_date" class="form-control form-control-sm datepicker bg-white mr-1" placeholder="Pick End Date" readonly="readonly" required>
												<!-- <input type="submit" value="GO" class="btn btn-success btn-sm"> -->
												<button type="submit" class="btn btn-success btn-sm">GO!</button>
													
										</div>	
									
									</form>
									<div class="text-center mt-2"><?php echo 'From:<strong>'. "\t". date('m/d/y', strtotime($start_date)). "\t". '</strong>to:<strong>' . "\t" . date('m/d/y', strtotime($end_date)) . '</strong>'; ?> </div>
							</div>
										
              <div class="table-responsive">
                <table class="table table-bordered text-center" id="dt2" width="100%" cellspacing="0">
                  <thead>
								
                    <tr>
						<th> Passenger Name</th>
						<th>SAP ID</th>
						<th>User ID</th>
						<th>Traveler Type</th>
						<th>Company Code</th>
						<th>Booking Date</th>
												
                    </tr>
                  </thead>
                  <tbody>
						<?php 
						foreach ($dates_search as $flight) { ?>
							<tr>
							<td><?php echo ucfirst(strtolower($flight->passenger_first_name)) .'&nbsp;'. ucfirst(strtolower($flight->passenger_last_name)); ?></td>
							<td><?php echo $flight->sap_id; ?></td>
							<td><?php echo $flight->user_id; ?></td>
							<td><?php echo $flight->traveller_type; ?></td>
							<td><?php echo $flight->company_code; ?></td>
							<td><?php echo date('m/d/y', strtotime($flight->booking_date)); ?></td>
							</tr>
						<?php } ?>
                  </tbody>
                </table>

              </div>
            </div>
            <div class="card-footer small text-muted">Last modified <?php echo date('l jS \of F Y g:i a', strtotime($hotel->date_time_updated)); ?></div>
          </div>

        </div>


