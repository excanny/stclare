

<?php if($this->session->flashdata('error')) { ?>
	
	<div class="alert alert-danger alert-dismissible">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<!-- <strong>Sorry!</strong> <?php //echo validation_errors(); ?> -->
		<?php echo $this->session->flashdata('error'); ?>
	</div>

<?php } ?>

	
<?php if ($this->session->userdata('update') <> '') { ?>

		<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Success!</strong> <?php echo $this->session->userdata("update"); ?> 
		</div>

<?php } ?>

<section class="card mb-3">
	<div class="card-header"> <span><strong>Edit Hotel Record</strong></span>
	<a href="<?php echo base_url(); ?>index.php/hotel" class="btn btn-primary btn-sm float-right">	<< All Hotels</a>
	</div>
		<div class="container py-3">
		<form method="post" action="<?php echo site_url('index.php/hotel/update/'. $hotel->id);?>">
					<div class="row">
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>FIRST NAME:</strong></label>
								<input name="first_name" type="text" class="form-control" value="<?php echo $hotel->first_name; ?>" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong> MIDDLE NAME:</strong></label>
								<input name="middle_name" type="text" class="form-control" value="<?php echo $hotel->middle_name; ?>">
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>LAST NAME:</strong></label>
								<input name="last_name" type="text" class="form-control" value="<?php echo $hotel->last_name; ?>">
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for=""><strong>DIRECT BILL NO:</strong></label>
								<input name="direct_bill_no" type="text" class="form-control" value="<?php echo $hotel->direct_bill_no; ?>" id="">
							</div>
					</div>
					
					</div>			
					
					<div class="row">
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>ISSUED DATE:</strong></label>
								<input name="issue_date" type="text" class="form-control datepicker bg-white" value="<?php echo date('m/d/Y', strtotime($hotel->issue_date)); ?>" id="" readonly="readonly">
							</div>
					</div>
					
						<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>HOTEL NAME:</strong></label>
								<input name="hotel_name" type="text" class="form-control" value="<?php echo $hotel->hotel_name; ?>" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>HOTEL ADDRESS:</strong></label>
								<input name="hotel_address" type="text" class="form-control" value="<?php echo $hotel->hotel_address; ?>" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>HOTEL CITY CODE:</strong></label>
								<input name="hotel_city_code" type="text" class="form-control" value="<?php echo $hotel->hotel_city_code; ?>" >
							</div>
					</div>
					
					</div>
					<div class="row">
					<div class="col-lg-3">
							<div class="form-group">
								<label for=""><strong>CITY:</strong></label>
								<input name="city" type="text" class="form-control" value="<?php echo $hotel->city; ?>" id="" >
							</div>
					</div>
						<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>STATE CODE:</strong></label>
								<input name="state_code" type="text" class="form-control" value="<?php echo $hotel->state_code; ?>" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>ZIP CODE:</strong></label>
								<input name="zip_code" type="text" class="form-control" value="<?php echo $hotel->zip_code; ?>" >
							</div>
					</div>
					
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>HOTEL PHONE NO:</strong></label>
								<input name="hotel_phone_code" type="text" class="form-control" value="<?php echo $hotel->hotel_phone_code; ?>" >
							</div>
					</div>
						
					</div>
					<div class="row">
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>CHECK IN:</strong></label>
								<input name="check_in" type="text" class="form-control datepicker" value="<?php echo date('m/d/Y', strtotime($hotel->check_in)); ?>" >
							</div>
					</div>
					
					
					<div class="col-lg-3">
							<div class="form-group">
								<label for=""><strong>CHECK OUT:</strong></label>
								<input name="check_out" type="text" class="form-control datepicker" value="<?php echo date('m/d/Y', strtotime($hotel->check_out)); ?>" id="" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>NO. OF NIGHTS:</strong></label>
								<input name="no_of_nights" type="text" class="form-control" value="<?php echo $hotel->no_of_nights; ?>" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>ROOM TYPE:</strong></label>
								<input name="room_type" type="text" class="form-control" value="<?php echo $hotel->room_type; ?>" >
							</div>
					</div>
					
					</div>
					<div class="row">
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>HOTEL RATE CATEGORY:</strong></label>
								<input name="hotel_rate_category" type="text" class="form-control" value="<?php echo $hotel->hotel_rate_category; ?>" >
							</div>
					</div>
					
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>CONFIRMATION NUMBER:</strong></label>
								<input name="confirmation_no" type="text" class="form-control" value="<?php echo $hotel->confirmation_no; ?>" >
							</div>
					</div>
						<div class="col-lg-3">
							<div class="form-group">
								<label for=""><strong>BOOKING STATUS:</strong></label>
								<input name="booking_status" type="text" class="form-control" value="<?php echo $hotel->booking_status; ?>" id="" >
							</div>
					</div>
						<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>TRAVELER TYPE:</strong></label>
								<input name="traveller_type" type="text" class="form-control" value="<?php echo $hotel->traveller_type; ?>" >
							</div>
					</div>
								   
					</div>
					<div class="row">
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>USER ID:</strong></label>
								<input name="user_id" type="text" class="form-control" value="<?php echo $hotel->user_id; ?>" >
							</div>
					</div>	
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>SAP ID:</strong></label>
								<input name="sap_id" type="text" class="form-control" value="<?php echo $hotel->sap_id; ?>" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>COMPANY CODE:</strong></label>
								<input name="company_code" type="text" class="form-control" value="<?php echo $hotel->company_code; ?>" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>COST CENTRE:</strong></label>
								<input name="cost_centre" type="text" class="form-control" value="<?php echo $hotel->cost_centre; ?>" >
							</div>
					</div>
					
					</div>
					<div class="row">
					
					<div class="col-lg-3">
							<div class="form-group">
								<label for=""><strong>LOCAL CURENCY CODE:</strong></label>
								<input name="local_currency_code" type="text" class="form-control" value="<?php echo $hotel->local_currency_code; ?>" id="" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>RATE/NIGHT:</strong></label>
								<input name="rate_night" type="text" class="form-control" value="<?php echo $hotel->rate_night; ?>" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>AMOUNT:</strong></label>
								<input name="amt" type="text" class="form-control" value="<?php echo $hotel->amt; ?>" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>SERVICE CHARGE:</strong></label>
								<input name="service_charge" type="text" class="form-control" value="<?php echo $hotel->service_charge; ?>" >
							</div>
					</div>
					</div>
					<div class="row">
					
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>AFTER HOUR:</strong></label>
								<input name="after_hour" type="text" class="form-control" value="<?php echo $hotel->after_hour; ?>" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>TOTAL AMOUNT:</strong></label>
								<input name="total_amount" type="text" class="form-control" value="<?php echo $hotel->total_amount; ?>" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for=""><strong>GDS RECORD LOCATOR:</strong></label>
								<input name="gds_record_locator" type="text" class="form-control" value="<?php echo $hotel->gds_record_locator; ?>" id="" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>AUTH.ID No.:</strong></label>
								<input name="auth_id_no" type="text" class="form-control" value="<?php echo $hotel->auth_id_no; ?>" >
							</div>
					</div>
					
					</div>

					<div class="row">
					
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>COUNTRY:</strong></label>
								<input name="country" type="text" class="form-control" value="<?php echo $hotel->country; ?>" >
							</div>
					</div>
					<div class="col-lg-3">
							<div class="form-group">
								<label for="pwd"><strong>CHAIN CODE:</strong></label>
								<input name="chain_code" type="text" class="form-control" value="<?php echo $hotel->chain_code; ?>" >
							</div>
					</div>
					
					
					</div>
		
					<button type="submit" class="btn btn-primary">UPDATE</button>
				</form>
			</div>
			</div>
	</section>

		
