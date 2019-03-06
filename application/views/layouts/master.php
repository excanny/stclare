<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>St. Clare Travels - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url();?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url();?>assets/css/sb-admin.css" rel="stylesheet">

		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<link rel="stylesheet" href="https:/resources/demos/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timedropper/1.0/timedropper.min.css" />
		

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top" style="background:#fff !important;">

      <a class="navbar-brand mr-1" href="<?php echo site_url(); ?>index.php/welcome">
			<img src="http://stclaretravels.com/images/ST%20CLARE%20logo.jpg" alt="Logo" style="width:200px;">
			</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars fa-lg" style="color:red;"></i>
      </button>
			<span class="">Welcome, <strong><?php echo $this->session->userdata['logged_in']['client_name']; ?></strong></span>
      <!--Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
				
				
          <!-- <div class="input-group-append">
            
          </div> -->
        </div>
      </form> 

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <!-- <li class="nav-item dropdown no-arrow mx-1" >
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#bd2130">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1" >
          </a>
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#bd2130">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger"></span>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#bd2130">
          <i class="fas fa-caret-down"></i><i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right bg-danger" aria-labelledby="userDropdown">
            <!-- <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div> -->
            <a class="dropdown-item  text-white" href="<?php echo base_url('index.php/user/logout'); ?>">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav" style="background:#bd2130 !important;">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo site_url(); ?>index.php/welcome">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>DASHBOARD</span>
          </a>
        </li>
			
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?php echo site_url();?>index.php/flight" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-plane fa-lg text-white"></i>
                <span class="text-white">Flights</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header"></h6>
                <a class="dropdown-item" href="<?php echo site_url();?>index.php/flight">All Flights</a>
                <a class="dropdown-item" href="<?php echo site_url();?>index.php/flight/create">Add New</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?php echo site_url();?>index.php/hotel" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-hotel text-white"></i>
                <span class="text-white">Hotels</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header"></h6>
                <a class="dropdown-item" href="<?php echo site_url();?>index.php/hotel">All Hotels</a>
                <a class="dropdown-item" href="<?php echo site_url('index.php/hotel/create'); ?>">Add New</a>
              </div>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-users text-white"></i>
                <span class="text-white">Clients</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header"></h6>
                <a class="dropdown-item" href="<?php echo site_url();?>index.php/user/all_users">All Clients</a>
                <a class="dropdown-item" href="<?php echo site_url("index.php/user/register"); ?>">Add New</a>
              </div>
            </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-upload text-white"></i>
            <span class="text-white">Import Excel Data</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header"></h6>
            <a class="dropdown-item" href="<?php echo site_url();?>index.php/excel_ticket_import">Upload Ticket Field</a>
            <a class="dropdown-item" href="<?php echo site_url();?>index.php/excel_hotel_import">Upload Hotel Field</a>
          </div>
        </li>
		
      </ul>

			<div id="content-wrapper">

				<div class="container-fluid">

					<!-- Breadcrumbs-->
					<ol class="breadcrumb bg-white">
						<li class="breadcrumb-item">
							<span style="color: purple;">Dashboard</span>
						</li>
						<!-- <li class="breadcrumb-item active"></li> -->
					</ol>

 <!-- Icon Cards-->

 <!-- <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5">26 Hotel Reservations</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">11 Travels January</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5">123 New Orders!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                  <div class="mr-5">13 New Tickets!</div>
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


         
			<!-- DYNAMIC CONTENT -->

				<?php $this->load->view($content); ?> 

			<!-- END OF DYNAMIC CONTENT -->


        <!-- Sticky Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © St. Clares Travels 2018 - <?php echo date("Y"); ?></span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url();?>assets/vendor/jquery/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="<?=base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?=base_url();?>assets/vendor/chart.js/Chart.min.js"></script>
    <script src="<?=base_url();?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
    
    <!-- Custom scripts for all pages-->
    <script src="<?=base_url();?>assets/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="<?=base_url();?>assets/js/demo/datatables-demo.js"></script>
    <script src="<?=base_url();?>assets/js/demo/chart-area-demo.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/timedropper/1.0/timedropper.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.jshttps://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

    <script src="<?=base_url();?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>


			<!-- Javascript -->
      <script>
				
  $(document).ready(function(){
 
						// Date Picker JS
					$( ".datepicker" ).datepicker({
						changeMonth: true,
						changeYear: true,
						dateFormat: 'mm/d/yy',
					});

						// Time Picker JS
					$( ".timepicker" ).timeDropper(
            {format: "HH:mm"}
          );

		
    		$("#dt").DataTable(
						{
							"order": [[ 6 , "desc" ]],
              // dom: 'lBfrtip', // if you remove this line you will see the show entries dropdown
							// buttons: [
							// 	{ extend: 'csv', className: 'btn-danger btn-sm' },
							// 	{ extend: 'pdf', className: 'btn-danger btn-sm' },
							// 	{ extend: 'excel', className: 'btn-danger btn-sm' }
							// ]
						}
				);

        $('#dt2').DataTable();

				});
			</script>

  </body>

</html> 
