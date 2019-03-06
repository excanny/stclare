
<?php if($this->session->flashdata('error')) { ?>
	
	<div class="alert alert-danger alert-dismissible">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<!-- <strong>Sorry!</strong> <?php //echo validation_errors(); ?> -->
		<?php echo $this->session->flashdata('error'); ?>
	</div>

<?php } ?>

<section class="card mb-3">
	<div class="card-header">Hotel Reservations | Add New</div>
		<div class="container py-3">
				<form method="post" action="<?php echo site_url('index.php/hotel/store');?>">
					<div class="row">
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>FIRST NAME:</strong></label>
								<input name="first_name" type="text" class="form-control" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong> MIDDLE NAME:</strong></label>
								<input name="middle_name" type="text" class="form-control" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>LAST NAME:</strong></label>
								<input name="last_name" type="text" class="form-control" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for=""><strong>DIRECT BILL NO:</strong></label>
								<input name="direct_bill_no" type="text" class="form-control" id="" >
							</div>
					</div>
					
					</div>			
					
					<div class="row">
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>ISSUED DATE:</strong></label>
								<input name="issue_date" type="text" class="form-control datepicker" >
							</div>
					</div>
					
						<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>HOTEL NAME:</strong></label>
								<input name="hotel_name" type="text" class="form-control" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>HOTEL ADDRESS:</strong></label>
								<input name="hotel_address" type="text" class="form-control" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>HOTEL CITY CODE:</strong></label>
								<input name="hotel_city_code" type="text" class="form-control" >
							</div>
					</div>
					
					</div>
					<div class="row">
					<div class="col-lg-3">
							<div class="form-group">
								<label for=""><strong>CITY:</strong></label>
								<input name="city" type="text" class="form-control" id="" >
							</div>
					</div>
						<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>STATE CODE:</strong></label>
								<input name="state_code" type="text" class="form-control" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>ZIP CODE:</strong></label>
								<input name="zip_code" type="text" class="form-control" >
							</div>
					</div>
					
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>HOTEL PHONE NO:</strong></label>
								<input name="hotel_phone_code" type="text" class="form-control" >
							</div>
					</div>
						
					</div>
					<div class="row">
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>CHECK IN:</strong></label>
								<input name="check_in" type="text" class="form-control datepicker" >
							</div>
					</div>
					
					
					<div class="col-lg-3">
							<div class="form-group">
								<label for=""><strong>CHECK OUT:</strong></label>
								<input name="check_out" type="text" class="form-control datepicker" id="" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>NO. OF NIGHTS:</strong></label>
								<input name="no_of_nights" type="number" class="form-control" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>ROOM TYPE:</strong></label>
								<input name="room_type" type="text" class="form-control" >
							</div>
					</div>
					
					</div>
					<div class="row">
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>HOTEL RATE CATEGORY:</strong></label>
								<input name="hotel_rate_category" type="text" class="form-control" >
							</div>
					</div>
					
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>CONFIRMATION NO:</strong></label>
								<input name="confirmation_no" type="text" class="form-control" >
							</div>
					</div>
						<div class="col-lg-3">
							<div class="form-group">
								<label for=""><strong>BOOKING STATUS:</strong></label>
								<input name="booking_status" type="text" class="form-control" id="" >
							</div>
					</div>
						<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>TRAVELER TYPE:</strong></label>
								<input name="traveller_type" type="text" class="form-control" >
							</div>
					</div>
								   
					</div>
					<div class="row">
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>USER ID:</strong></label>
								<input name="user_id" type="text" class="form-control" >
							</div>
					</div>	
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>SAP ID:</strong></label>
								<input name="sap_id" type="text" class="form-control" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>COMPANY CODE:</strong></label>
								<input name="company_code" type="text" class="form-control" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>COST CENTRE:</strong></label>
								<input name="cost_centre" type="text" class="form-control" >
							</div>
					</div>
					
					</div>
					<div class="row">
					
					<div class="col-lg-3">
							<div class="form-group">
								<label for=""><strong>LOCAL CURENCY CODE:</strong></label>
								<input name="local_currency_code" type="text" class="form-control" id="" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>RATE/NIGHT:</strong></label>
								<input name="rate_night" type="text" class="form-control" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>AMOUNT:</strong></label>
								<input name="amt" type="text" class="form-control" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>SERVICE CHARGE:</strong></label>
								<input name="service_charge" type="text" class="form-control" >
							</div>
					</div>
					</div>
					<div class="row">
					
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>AFTER HOUR:</strong></label>
								<input name="after_hour" type="text" class="form-control" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>TOTAL AMOUNT:</strong></label>
								<input name="total_amount" type="text" class="form-control" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for=""><strong>GDS RECORD LOCATOR:</strong></label>
								<input name="gds_record_locator" type="text" class="form-control" id="" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>COUNTRY:</strong></label>
								<input name="country" type="text" class="form-control" >
							</div>
					</div>
					</div>
					<div class="row">
					
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>AUTH.ID No.:</strong></label>
								<input name="auth_id_no" type="text" class="form-control" >
							</div>
					</div>
					
					</div>
					<button type="submit" class="btn btn-primary">SUBMIT</button>
				</form>
			</div>
	</section>
