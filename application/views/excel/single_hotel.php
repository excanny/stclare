<section class="card">
<div class="card-header">
	<i class="fa fa-file-excel fa-lg" aria-hidden="true"></i> &nbsp; Hotel Field Excel Data
<a href="<?php echo base_url(); ?>index.php/excel_hotel_import" class="btn btn-primary btn-sm float-right"> << All</a>
  </div>
	<div class="container">
		<div class="row text-center py-5">
		  <div class="col-lg-2">
			<p><strong>Passenger Name</strong></p>
			<p><?php echo $excel_hotel->PASSENGER_NAME; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>SAP ID</strong></p>
			<p><?php echo $excel_hotel->SAP_ID; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>User ID</strong></p>
			<p><?php echo $excel_hotel->USER_ID; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Ticket Number</strong></p>
			<p><?php //echo $excel_hotel->TICKET_No; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Traveler Type</strong></p>
			<p><?php echo $excel_hotel->TRAVELER_TYPE; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Company Code</strong></p>
			<p><?php echo $excel_hotel->COY_CODE; ?></p>
		  </div>
		</div>
		<div class="row text-center">
		  <div class="col-lg-2">
			<p><strong>Link Key</strong></p>
			<p><?php //echo $excel_hotel->LINK_KEY; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Direct Bill</strong></p>
			<p><?php echo $excel_hotel->DIRECT_BILL_NO; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Sub Booking Type</strong></p>
			<p><?php //echo $excel_hotel->SUB_BOOKING_TYPE; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Issue Date</strong></p>
			<p><?php echo $excel_hotel->ISSUE_DATE; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Ticket No.</strong></p>
			<p><?php //echo $excel_hotel->ticket_no; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>PNR Locator</strong></p>
			<p><?php echo $excel_hotel->GDS_RECORD_LOCATOR; ?></p>
		  </div>
		</div>
<hr>
		<div class="row text-center">
		  <div class="col-lg-2">
			<p><strong>Hotel Name</strong></p>
			<p><?php echo $excel_hotel->HOTEL_NAME; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>HOTEL CITY CODE</strong></p>
			<p><?php echo $excel_hotel->HOTEL_CITY_CODE; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Airline No.</strong></p>
			<p><?php echo $excel_hotel->HOTEL_PHONE_NO; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Departure City Code</strong></p>
			<p><?php //echo $excel_hotel->DEPATURE_CITY_CODE; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Departure Date/Time</strong></p>
			<p><?php //echo $excel_hotel->DEPARTURE_DATE . $excel_hotel->DEPARTURE_TIME; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Purpose of Trip</strong></p>
			<p><?php //echo $excel_hotel->PURPOSE_OF_TRIP; ?></p>
		  </div>
		</div>
		<div class="row text-center">
		  <div class="col-lg-2">
			<p><strong>Date Submitted</strong></p>
			<p><?php //echo $excel_hotel->date_time_submitted; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Cost Center</strong></p>
			<p><?php echo $excel_hotel->COST_CENTRE; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>User ID</strong></p>
			<p><?php echo $excel_hotel->USER_ID; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Auth ID</strong></p>
			<p><?php echo $excel_hotel->AUTH_ID_NO; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong></strong></p>
			<p><?php //echo $excel_hotel->departure_date . $excel_hotel->departure_time; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Name</strong></p>
			<p><?php //echo $excel_hotel->passenger_name; ?></p>
		  </div>
		</div>
	</div>
</section>
