
          <!-- Icon Cards-->

 <div class="row">
            <div class="col-xl-4 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-plane"></i>
                  </div>
                  <div class="mr-5"><span class="badge badge-secondary" style="font-size: 20px;"><?php echo $flight_count; ?></span> Flights</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url();?>index.php/flight">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-hotel"></i>
                  </div>
                  <div class="mr-5"><span class="badge badge-secondary" style="font-size: 20px;"><?php echo $hotel_count; ?></span> Hotel Reservations</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url();?>index.php/hotel">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
						<?php if($this->session->userdata['logged_in']['level'] > 0){ ?>
							<div class="col-xl-4 col-sm-6 mb-3">
								<div class="card text-white bg-success o-hidden h-100">
									<div class="card-body">
										<div class="card-body-icon">
											<i class="fas fa-fw fa-users"></i>
										</div>
										<div class="mr-5"><span class="badge badge-secondary" style="font-size: 20px;"><?php //echo $ticket_excel_count; ?></span> All Clients</div>
									</div>
									<a class="card-footer text-white clearfix small z-1" href="<?php //echo site_url();?>index.php/Excel_ticket_import">
										<span class="float-left">View Details</span>
										<span class="float-right">
											<i class="fas fa-angle-right"></i>
										</span>
									</a>
								</div>
							</div>
							<?php } ?>
            <!-- <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white o-hidden h-100" style="background:#9400D3;">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                  <div class="mr-5"><span class="badge badge-secondary" style="font-size: 20px;"><?php echo $hotel_excel_count; ?></span> All Hotel Excel Data!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div> -->

					
					<!-- Area Chart Example
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Travel Volume Chart </div>
            <div class="card-body">
              <canvas id="myAreaChart" width="100%" height="30"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div> -->
				<!-- /.container-fluid -->
			 


