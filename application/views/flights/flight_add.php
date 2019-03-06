

<?php if(validation_errors() != false) { ?>
	
	<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Sorry!</strong> <?php echo validation_errors(); ?>
	</div>

<?php } ?>

<section class="card mb-3">
	<div class="card-header"> <h4>Add New Flight</h4></div>
		<div class="container py-3">
				<form method="post" action="<?php echo site_url('index.php/flight/store');?>">
					<div class="row">
						<div class="col-lg-3">
								<div class="form-group">
								<label for=""><strong>LINK KEY:</strong></label>
								<input name="link_key" type="text" class="form-control" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>DIRECT BILL:</strong></label>
								<input name="direct_bill" type="text" class="form-control" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>SUB BOOKING TYPE:</strong></label>
								<input name="sub_booking_type" type="text" class="form-control" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>ISSUE DATE:</strong></label>
								<input name="issue_date" type="text" class="form-control bg-white datepicker" id="" readonly="readonly" >
								</div>
						</div>
					</div>			
						
					<div class="row">
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>PASSENGER FIRST NAME:</strong></label>
								<input name="passenger_first_name" type="text" class="form-control" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>PASSENGER MIDDLE NAME:</strong></label>
								<input name="passenger_middle_name" type="text" class="form-control" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>PASSENGER LAST NAME:</strong></label>
								<input name="passenger_last_name" type="text" class="form-control" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>TICKET No.:</strong></label>
								<input name="ticket_no" type="text" class="form-control" id="" >
								</div>
						</div>
						
					</div>
					<div class="row">

						<div class="col-lg-3">
								<div class="form-group">
								<label for=""><strong>PNR/LOCATOR:</strong></label>
								<input name="pnr_locator" type="text" class="form-control" id="" >
								</div>
						</div>

						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>AIRLINE NAME:</strong></label>
								<input name="airline_name" type="text" class="form-control" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>AIRLINE CODE:</strong></label>
								<input name="airline_code" type="text" class="form-control" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>AIRLINE NUMBER:</strong></label>
								<input name="airline_no" type="text" class="form-control" id="" >
								</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>DEPATURE CITY CODE:</strong></label>
								<input name="departure_city_code" type="text" class="form-control" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>DEPARTURE DATE:</strong></label>
								<input name="departure_date" type="text" class="form-control bg-white datepicker" readonly="readonly" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for=""><strong>DEPARTURE TIME:</strong></label>
								<input name="departure_time" type="text" class="form-control bg-white timepicker" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>FLIGHT No.:</strong></label>
								<input name="flight_no" type="text" class="form-control" id="" >
								</div>
						</div>
						
					</div>
					<div class="row">
				
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>ARRIVAL CITY CODE:</strong></label>
								<input name="arrival_city_code" type="text" class="form-control" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>ARRIVAL DATE:</strong></label>
								<input name="arrival_date" type="text" class="form-control bg-white datepicker" id="" readonly="readonly" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>ARRIVAL TIME:</strong></label>
								<input name="arrival_time" type="text" class="form-control bg-white timepicker" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>CLASS:</strong></label>
								<input name="class" type="text" class="form-control" id="" >
								</div>
						</div>
						
					</div>
					<div class="row">
	
						<div class="col-lg-3">
								<div class="form-group">
								<label for=""><strong>TRAVELER TYPE:</strong></label>
								<input name="traveller_type" type="text" class="form-control" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>USER ID:</strong></label>
								<input name="user_id" type="text" class="form-control" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>SAP ID:</strong></label>
								<input name="sap_id" type="text" class="form-control" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>COMPANY CODE:</strong></label>
								<input name="company_code" type="text" class="form-control" id="" >
								</div>
						</div>
					</div>
					<div class="row">
					
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>COST CENTRE:</strong></label>
								<input name="cost_centre" type="text" class="form-control" id="" >
								</div>
						</div>
					
					<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>AUTH.ID No.:</strong></label>
								<input name="auth_id_no" type="text" class="form-control" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for=""><strong>BASE FARE:</strong></label>
								<input name="base_fare" type="text" class="form-control" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>TOTAL TAX:</strong></label>
								<input name="total_tax" type="text" class="form-control" id="" >
								</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>AMOUNT:</strong></label>
								<input name="amt" type="text" class="form-control" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>SERVICE CHARGE:</strong></label>
								<input name="service_charge" type="text" class="form-control" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>AFTER HOUR:</strong></label>
								<input name="after_hour" type="text" class="form-control" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>TOTAL AMOUNT:</strong></label>
								<input name="total_amount" type="text" class="form-control" id="" >
								</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>TRAVEL PURPOSE:</strong></label>
								<input name="travel_purpose" type="text" class="form-control" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
									<label for=""><strong>PURPOSE OF TRIP:</strong></label>
									<input name="purpose_of_trip" type="text" class="form-control" id="" list="purpose" >
									<datalist id="purpose">
										<option value="Training">
										<option value="Conference">
										<option value="Seminar">
										<option value="External">
									</datalist>
								</div>
						</div>
					
			
					<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>FORM OF PAYMENT:</strong></label>
								<input name="form_of_payment" type="text" class="form-control" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>ROUTING:</strong></label>
								<input name="routing" type="text" class="form-control" id="" >
								</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>ORIGIN:</strong></label>
								<input name="origin" type="text" class="form-control" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>DESTINATION:</strong></label>
								<input name="destination" type="text" class="form-control" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>ACCOUNT NAME:</strong></label>
								<input name="acct_name" type="text" class="form-control" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for=""><strong>REASON DESCRIPTION:</strong></label>
								<textarea name="reason_description" class="form-control" rows="1" id="" ></textarea>
								</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>TRANSACTION TYPE:</strong></label>
								<input name="transaction_type" type="text" class="form-control" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>BOOKING DATE:</strong></label>
								<input name="booking_date" type="text" class="form-control bg-white datepicker" id="" readonly="readonly" >
								</div>
						</div>

						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>LOWEST QUOTE:</strong></label>
								<input name="lowest_qoute" type="text" class="form-control" id="" >
								</div>
						</div>
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>REASON CODE:</strong></label>
								<input name="reason_code" type="text" class="form-control" id="" >
								</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3">
								<div class="form-group">
								<label for="pwd"><strong>FARE BASIS:</strong></label>
								<input name="fare_basis" type="text" class="form-control" id="" >
								</div>
						</div>
					
				</div>
			
					<button type="submit" class="btn btn-primary">SUBMIT</button>
				</form>
			</div>
	</section>

		
