<section class="card">
<div class="card-header">
	<i class="fa fa-file-excel fa-lg" aria-hidden="true"></i> &nbsp; Ticket Excel Data
<a href="<?php echo base_url(); ?>index.php/excel_ticket_import" class="btn btn-primary btn-sm float-right"> << All</a>
  </div>
	<div class="container">
		<div class="row text-center py-5">
		  <div class="col-lg-2">
			<p><strong>Passenger Name</strong></p>
			<p><?php echo $excel_ticket->PASSENGER_NAME; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>SAP ID</strong></p>
			<p><?php echo $excel_ticket->SAP_ID; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>User ID</strong></p>
			<p><?php echo $excel_ticket->USER_ID; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Ticket Number</strong></p>
			<p><?php echo $excel_ticket->TICKET_No; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Traveler Type</strong></p>
			<p><?php echo $excel_ticket->TRAVELER_TYPE; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Company Code</strong></p>
			<p><?php echo $excel_ticket->COMPANY_CODE; ?></p>
		  </div>
		</div>
		<div class="row text-center">
		  <div class="col-lg-2">
			<p><strong>Link Key</strong></p>
			<p><?php echo $excel_ticket->LINK_KEY; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Direct Bill</strong></p>
			<p><?php echo $excel_ticket->DIRECT_BILL; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Sub Booking Type</strong></p>
			<p><?php echo $excel_ticket->SUB_BOOKING_TYPE; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Issue Date</strong></p>
			<p><?php echo $excel_ticket->ISSUE_DATE; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Ticket No.</strong></p>
			<p><?php //echo $excel_ticket->ticket_no; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>PNR Locator</strong></p>
			<p><?php echo $excel_ticket->PNR_LOCATOR; ?></p>
		  </div>
		</div>
<hr>
		<div class="row text-center">
		  <div class="col-lg-2">
			<p><strong>Airline Name</strong></p>
			<p><?php echo $excel_ticket->AIRLINE_NAME; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Airline Code</strong></p>
			<p><?php echo $excel_ticket->AIRLINE_CODE; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Airline No.</strong></p>
			<p><?php echo $excel_ticket->AIRLINE_NUMBER; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Departure City Code</strong></p>
			<p><?php echo $excel_ticket->DEPATURE_CITY_CODE; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Departure Date/Time</strong></p>
			<p><?php echo $excel_ticket->DEPARTURE_DATE . $excel_ticket->DEPARTURE_TIME; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Purpose of Trip</strong></p>
			<p><?php echo $excel_ticket->PURPOSE_OF_TRIP; ?></p>
		  </div>
		</div>
		<div class="row text-center">
		  <div class="col-lg-2">
			<p><strong>Date Submitted</strong></p>
			<p><?php //echo $excel_ticket->date_time_submitted; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Cost Center</strong></p>
			<p><?php echo $excel_ticket->COST_CENTRE; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>User ID</strong></p>
			<p><?php echo $excel_ticket->USER_ID; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Auth ID</strong></p>
			<p><?php echo $excel_ticket->AUTH_ID_NO; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong></strong></p>
			<p><?php //echo $excel_ticket->departure_date . $excel_ticket->departure_time; ?></p>
		  </div>
		  <div class="col-lg-2">
			<p><strong>Name</strong></p>
			<p><?php //echo $excel_ticket->passenger_name; ?></p>
		  </div>
		</div>
	</div>
</section>
