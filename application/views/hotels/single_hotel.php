<section class="card mb-5">
<div class="card-header">
	<i class="fa fa-user"></i> &nbsp; <strong><?php echo strtoupper($hotel->first_name . "\t" . $hotel->last_name) . '\'s'; ?></strong> Hotel Details
<a href="<?php echo base_url(); ?>index.php/hotel" class="btn btn-primary btn-sm float-right">	<< All Hotels</a>
  </div>
	<div class="container">
		<div class="row text-center py-5">
		  <div class="col-lg-2">
			<p><strong>Full Name</strong></p>
			<p><?php echo $hotel->first_name .'&nbsp;' . $hotel->middle_name .'&nbsp;' . $hotel->last_name; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Hotel Name</strong></p>
			<p><?php echo $hotel->hotel_name; ?></p>
		  </div>
			<div class="col-lg-2">
			<p><strong>Hotel Phone No.</strong></p>
			<p><?php echo $hotel->hotel_phone_code; ?></p>
		  </div>
			<div class="col-lg-2">
			<p><strong>Room Type</strong></p>
			<p><?php echo $hotel->room_type; ?></p>
		  </div>
			<div class="col-lg-2">
			<p><strong>Check In</strong></p>
			<p><?php echo date('m/d/Y', strtotime($hotel->check_in)); ?></p>
		  </div>
			<div class="col-lg-2">
			<p><strong>Check Out</strong></p>
			<p><?php echo date('m/d/Y', strtotime($hotel->check_out)); ?></p>
		  </div>
		  
		</div>
		<div class="row text-center">
		<div class="col-lg-2">
			<p><strong>Rate/Night</strong></p>
			<p><?php echo $hotel->rate_night; ?></p>
		  </div>
		  
			<div class="col-lg-2">
			<p><strong>Hotel Rate Category</strong></p>
			<p><?php echo $hotel->hotel_rate_category; ?></p>
		  </div>  
		  <div class="col-lg-2">
			<p><strong>No. of Nights</strong></p>
			<p><?php echo $hotel->no_of_nights; ?></p>
		  </div>
			<div class="col-lg-2">
			<p><strong>Hotel Address</strong></p>
			<p><?php echo $hotel->hotel_address; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>City</strong></p>
			<p><?php echo $hotel->city; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>State Code</strong></p>
			<p><?php echo $hotel->state_code; ?></p>
		  </div>
		</div>
<hr>
		<div class="row text-center">
		
			<div class="col-lg-2">
			<p><strong>Issued Date</strong></p>
			<p><?php echo date('m/d/Y', strtotime($hotel->issue_date)); ?></p>
		  </div>
			<div class="col-lg-2">
			<p><strong>Direct Bill No.</strong></p>
			<p><?php echo $hotel->direct_bill_no; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Confirmation No.</strong></p>
			<p><?php echo $hotel->confirmation_no; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Booking Status</strong></p>
			<p><?php echo $hotel->booking_status; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Traveller Type</strong></p>
			<p><?php echo $hotel->traveller_type; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Local Currency Code</strong></p>
			<p><?php echo $hotel->local_currency_code ?></p>
		  </div>
		  
		</div>
		<div class="row text-center">
		  <div class="col-lg-2">
			<p><strong>Cost Center</strong></p>
			<p><?php echo $hotel->cost_centre; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>User ID</strong></p>
			<p><?php echo $hotel->user_id; ?></p>
		  </div>
			<div class="col-lg-2">
			<p><strong>SAP ID</strong></p>
			<p><?php echo $hotel->sap_id; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Auth ID</strong></p>
			<p><?php echo $hotel->auth_id_no; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Service Charge</strong></p>
			<p><?php echo $hotel->service_charge; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>GDS Record Locator</strong></p>
			<p><?php echo $hotel->gds_record_locator; ?></p>
		  </div>
			
		</div>
<hr>
<div class="row text-center py-5">
		  
		  
		  <div class="col-lg-2">
			<p><strong>Amount</strong></p>
			<p><?php echo $hotel->amt; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>After Hour</strong></p>
			<p><?php echo $hotel->after_hour; ?></p>
		  </div>

			<div class="col-lg-2">
			<p><strong>Total Amount</strong></p>
			<p><?php echo $hotel->total_amount; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Issued Date</strong></p>
			<p><?php echo date('m/d/Y', strtotime($hotel->issue_date)); ?></p>
		  </div>
			<div class="col-lg-2">
			<p><strong>Traveller Type</strong></p>
			<p><?php echo $hotel->traveller_type; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Coy Code</strong></p>
			<p><?php echo $hotel->company_code; ?></p>
		  </div>
		</div>
		<div class="row text-center py-5">
		  
		  <div class="col-lg-2">
			<p><strong>Country</strong></p>
			<p><?php echo $hotel->country; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Hotel City Code</strong></p>
			<p><?php echo $hotel->hotel_city_code; ?></p>
		  </div>

			<div class="col-lg-2">
			<p><strong>Zip Code</strong></p>
			<p><?php echo $hotel->zip_code; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Chain Code</strong></p>
			<p><?php echo $hotel->chain_code; ?></p>
		  </div>
		</div>
	</div>
</section>
