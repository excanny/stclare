
	<div class="alert alert-warning rounded-0 text-center" style="border-left: 3px solid #000;">
			<strong>Caution!</strong> Ensure that only <strong>"HOTEL FIELD"</strong> excel file is uploaded in this section to avoid upload errors
	</div>
	<?php if ($this->session->userdata('excel_hotel_message') <> '') { ?>

		<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Success!</strong> <?php echo $this->session->userdata("excel_hotel_message"); ?>. <a href="<?php echo base_url('index.php/hotel/'); ?>"><u>View All</u></a> 
		</div>

	<?php } ?>

	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-12 text-center">
			
				<form action="<?php echo site_url('index.php/excel_hotel_import/save');?>" id="import_form" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="email"><strong>Upload only Hotel Excel File</strong></label> 
						<input type="file" name="uploaded_file" id="file" class="" required>
						<button type="submit" class="btn btn-success"><i class="fas fa-upload"></i> Upload</button>
					</div>
					<!-- <div class="custom-fi">
						<input type="file" name="uploaded_file" class="custom-file-input" id="customFile">
						<label class="custom-file-label" for="customFile">Select Excel File</label><input type="submit" value="Upload" class="btn btn-success">
					</div> -->
				</form>
				
			</div>
		</div>
	</div>




