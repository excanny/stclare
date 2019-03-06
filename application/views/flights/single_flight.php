<section class="card">
	<div class="card-header">
		<i class="fa fa-user"></i> &nbsp; <strong><?php echo strtoupper($flight->passenger_first_name . "\t" . $flight->passenger_last_name. '\'s'); ?></strong> Flight Details
	<a href="<?php echo base_url(); ?>index.php/flight" class="btn btn-primary btn-sm float-right">	<< All Flights</a>
		</div>
		<div class="container">
				<div class="row text-center py-5">
							<div class="col-lg-2">
								<p><strong>Direct Bill</strong></p>
								<p><?php echo $flight->direct_bill; ?></p>
							</div>
							<div class="col-lg-2">
							<p><strong>Sub Booking Type</strong></p>
							<p><?php echo $flight->sub_booking_type; ?></p>
							</div>
							<div class="col-lg-2">
							<p><strong>Issue Date</strong></p>
							<p><?php echo date('m/d/Y', strtotime($flight->issue_date)); ?></p>
							</div>
							<div class="col-lg-2">
							<p><strong>Passenger Name</strong></p>
							<p><?php echo $flight->passenger_first_name . $flight->passenger_middle_name . $flight->passenger_last_name; ?></p>
							</div>
							<div class="col-lg-2">
							<p><strong>Ticket No.</strong></p>
							<p><?php echo $flight->ticket_no; ?></p>
							</div>
							<div class="col-lg-2">
							<p><strong>PNR Locator</strong></p>
							<p><?php echo $flight->pnr_locator; ?></p>
							</div>
					</div>
					<div class="row text-center py-5">
						<div class="col-lg-2">
						<p><strong>Airline Name</strong></p>
						<p><?php echo $flight->airline_name; ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>Airline Code</strong></p>
						<p><?php echo $flight->airline_code; ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>Airline No.</strong></p>
						<p><?php echo $flight->airline_no; ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>Departure City Code</strong></p>
						<p><?php echo $flight->departure_city_code; ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>Departure Date/Time</strong></p>
						<p><?php echo date('m/d/Y', strtotime($flight->departure_date)) . '&nbsp;' . date('H:m', strtotime($flight->departure_time)); ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>Flight No.</strong></p>
						<p><?php echo $flight->flight_no; ?></p>
						</div>
					</div>
					<hr>
					<div class="row text-center py-5">
						<div class="col-lg-2">
							<p><strong>Class</strong></p>
							<p><?php echo $flight->class; ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>Traveller Type</strong></p>
						<p><?php echo $flight->traveller_type; ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>User ID</strong></p>
						<p><?php echo $flight->user_id; ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>SAP ID</strong></p>
						<p><?php echo $flight->sap_id; ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>Company Code</strong></p>
						<p><?php echo $flight->company_code; ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>Cost Center</strong></p>
						<p><?php echo $flight->cost_centre; ?></p>
						</div>
					</div>
					<div class="row text-center py-5">
						<div class="col-lg-2">
						<p><strong>Auth ID</strong></p>
						<p><?php echo $flight->auth_id_no; ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>Fare Basis</strong></p>
						<p><?php echo $flight->fare_basis; ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>Total Tax</strong></p>
						<p><?php echo $flight->total_tax; ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>Amount</strong></p>
						<p><?php echo $flight->amt; ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>Service Charge</strong></p>
						<p><?php echo $flight->service_charge; ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>After Hour</strong></p>
						<p><?php echo $flight->after_hour; ?></p>
						</div>
					</div>
					<hr>
					<div class="row text-center py-5">
						<div class="col-lg-2">
						<p><strong>Total Amount</strong></p>
						<p><?php echo $flight->total_amount; ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>Travel Purpose</strong></p>
						<p><?php echo $flight->travel_purpose; ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>Purpose of Trip</strong></p>
						<p><?php echo $flight->purpose_of_trip; ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>Form of Payment</strong></p>
						<p><?php echo $flight->form_of_payment; ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>Routing</strong></p>
						<p><?php echo $flight->routing; ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>Origin</strong></p>
						<p><?php echo $flight->origin; ?></p>
						</div>
					</div>
					<div class="row text-center py-5">
						
						<div class="col-lg-2">
						<p><strong>Destination</strong></p>
						<p><?php echo $flight->destination; ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>Account Name</strong></p>
						<p><?php echo $flight->acct_name; ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>Reason Description</strong></p>
						<p><?php echo $flight->reason_description; ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>Transaction Type</strong></p>
						<p><?php echo $flight->transaction_type; ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>Booking Date</strong></p>
						<p><?php echo date('m/d/Y', strtotime($flight->booking_date)); ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>Lowest Qoute</strong></p>
						<p><?php echo $flight->lowest_qoute; ?></p>
						</div>
					</div>
					<hr>
					<div class="row text-center py-5">	
						<div class="col-lg-2">
						<p><strong>Base Fare</strong></p>
						<p><?php echo $flight->base_fare; ?></p>
						</div>
						<div class="col-lg-2">
						<p><strong>Reason Code</strong></p>
						<p><?php echo $flight->reason_code; ?></p>
						</div>
					</div>
				</div>		
		</div>
</section>
