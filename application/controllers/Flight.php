<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flight extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public $layout;

	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('Flight_model');
	  $this->load->library('form_validation');
	  $this->layout = 'layouts/master';
	 
		if (! $this->session->userdata('logged_in'))
		{
			redirect('login'); // the user is not logged in, redirect them!
		}
	}


	public function index()
	{		
		$data['flights'] = $this->Flight_model->get_all();
		$data['content'] = 'flights/all_flights';
		$this->load->view($this->layout, $data);
	}

	public function create()
	{
		$data['content'] = 'flights/flight_add';
		$this->load->view($this->layout, $data);
	}

	public function store()
	{	
		
		// $this->form_validation->set_rules('currency_code', 'Currency Code', 'required');
		// $this->form_validation->set_rules('lowest_qoute', 'Lowest Qoute', 'required');
		// $this->form_validation->set_rules('reason_code', 'Reason Code', 'required');

		// if ($this->form_validation->run() === FALSE)
		// 	{
		// 		$this->session->set_flashdata('error', validation_errors());
		// 		$data['content'] = 'flights/flight_add';
		// 	   $this->load->view($this->layout, $data); 
		// 	}
		// else
		// {
			//if (!empty($_POST)) {
				$data = $this->input->post();
				unset($data["departure_date"], $data["arrival_date"], $data["issue_date"], $data["booking_date"]); 
				
				$departure_date	= $this->input->post("departure_date");
				$arrival_date = $this->input->post("arrival_date");
				$issue_date = $this->input->post("issue_date");
				$booking_date = $this->input->post("booking_date");

				$data["departure_date"] = date("Y-m-d", strtotime($departure_date));
				$data["arrival_date"] = date("Y-m-d", strtotime($arrival_date));
				$data["issue_date"] = date("Y-m-d", strtotime($issue_date));
				$data["booking_date"] = date("Y-m-d", strtotime($booking_date));
				
				//var_dump($data);
				$id = $this->Flight_model->insert_item($data);
				$this->session->set_flashdata('message', 'Record Created Successfully');
				redirect(base_url('index.php/flight'));    
			//}
		//}
		
		
	}

	public function show($id)
	{
	   $data['flight'] = $this->Flight_model->find_item($id);
	   $data['content'] = 'flights/single_flight';
	   $this->load->view($this->layout, $data);
	}

	public function edit($id)
	{
	   $data['flight'] = $this->Flight_model->find_item($id);
	   $data['content'] = 'flights/flight_edit';
	   $this->load->view($this->layout, $data);
	}

	public function update($id)
	 {
		/// $this->form_validation->set_rules('link_key', 'Link Key', 'required');
		// $this->form_validation->set_rules('direct_bill', 'Direct Bill', 'required');
		// $this->form_validation->set_rules('sub_booking_type', 'Sub Booking Type', 'required');
		// $this->form_validation->set_rules('issue_date', 'Issue Date', 'required');
		// $this->form_validation->set_rules('passenger_first_name', 'Passenger First Name', 'required');
		// // $this->form_validation->set_rules('passenger_middle_name', 'Passenger Middle Name', 'required');
		// // $this->form_validation->set_rules('passenger_last_name', 'Passenger Last Name', 'required');
		// $this->form_validation->set_rules('ticket_no', 'Ticket No', 'required');
		// $this->form_validation->set_rules('pnr_locator', 'PNR Locator', 'required');
		// $this->form_validation->set_rules('airline_name', 'Airline Name', 'required');
		// $this->form_validation->set_rules('airline_code', 'Airline Code', 'required');
		// $this->form_validation->set_rules('airline_no', 'Airline No', 'required');
		// $this->form_validation->set_rules('departure_city_code', 'Departure City Code', 'required');
		// $this->form_validation->set_rules('departure_date', 'Departure Date', 'required');
		// $this->form_validation->set_rules('departure_time', 'Departure Time', 'required');
		// $this->form_validation->set_rules('flight_no', 'Flight No', 'required');
		// $this->form_validation->set_rules('arrival_city_code', 'Arrival City Code', 'required');
		// $this->form_validation->set_rules('arrival_date', 'Arrival Date', 'required');
		// $this->form_validation->set_rules('arrival_time', 'Arrival Time', 'required');
		// $this->form_validation->set_rules('class', 'Class', 'required');
		// $this->form_validation->set_rules('traveller_type', 'Traveller Type', 'required');
		// $this->form_validation->set_rules('booking_date', 'Booking Date', 'required');
		// $this->form_validation->set_rules('user_id', 'User ID', 'required');
		// $this->form_validation->set_rules('sap_id', 'SAP ID', 'required');
		// $this->form_validation->set_rules('company_code', 'Company Code', 'required');
		// $this->form_validation->set_rules('cost_centre', 'Cost Centre', 'required');
		// $this->form_validation->set_rules('auth_id_no', 'Auth ID No', 'required');
		// $this->form_validation->set_rules('base_fare', 'Base Fare', 'required');
		// $this->form_validation->set_rules('total_tax', 'Total Tax', 'required');
		// $this->form_validation->set_rules('amt', 'Amount', 'required');
		// $this->form_validation->set_rules('service_charge', 'Service Charge', 'required');
		// $this->form_validation->set_rules('after_hour', 'After Hour', 'required');
		// $this->form_validation->set_rules('total_amount', 'Total Amount', 'required');
		// $this->form_validation->set_rules('purpose_of_trip', 'Purpose Of Trip', 'required');
		// $this->form_validation->set_rules('form_of_payment', 'Form Of Payment', 'required');
		// $this->form_validation->set_rules('routing', 'Routing', 'required');
		// $this->form_validation->set_rules('acct_name', 'Account Name', 'required');
		// $this->form_validation->set_rules('reason_description', 'Reason Description', 'required');
		// $this->form_validation->set_rules('transaction_type', 'Transaction Type', 'required');
		// $this->form_validation->set_rules('currency_code', 'Currency Code', 'required');
		// $this->form_validation->set_rules('lowest_qoute', 'Lowest Qoute', 'required');
		// $this->form_validation->set_rules('reason_code', 'Reason Code', 'required');
		// // $this->form_validation->set_rules('return_arrival_city_code', 'Return Arrival City Code', 'required');
		// //$this->form_validation->set_rules('return_arrival_date', 'Return Arrival Date', 'required');
		// $this->form_validation->set_rules('return_arrival_time', 'Return Arrival Time', 'required');
		// // $this->form_validation->set_rules('return_departure_city_code', 'Return Departure City Code', 'required');
		// //$this->form_validation->set_rules('return_departure_date', 'Return Departure Date', 'required');
		// $this->form_validation->set_rules('return_departure_time', 'Return Departure Time', 'required');

		// if ($this->form_validation->run() == FALSE)
		// {
			
		// $this->session->set_flashdata('error', validation_errors());
		// redirect(base_url('index.php/flight/edit/' . $id));
		//  }
		// else
		// { 
		// 	if (!empty($_POST)) {
			$data = $this->input->post();
			unset($data["departure_date"], $data["arrival_date"], $data["issue_date"], $data["booking_date"], $data["return_arrival_date"], $data["return_departure_date"]); 

			$departure_date	= $this->input->post("departure_date");
			$arrival_date = $this->input->post("arrival_date");
			$issue_date = $this->input->post("issue_date");
			$booking_date = $this->input->post("booking_date");
			$return_arrival_date = $this->input->post("return_arrival_date");
			$return_departure_date = $this->input->post("return_departure_date");
			$data["departure_date"] = date("Y-m-d", strtotime($departure_date));
			$data["arrival_date"] = date("Y-m-d", strtotime($arrival_date));
			$data["issue_date"] = date("Y-m-d", strtotime($issue_date));
			$data["booking_date"] = date("Y-m-d", strtotime($booking_date));
			$data["return_arrival_date"] = date("Y-m-d", strtotime($return_arrival_date));
			$data["return_departure_date"] = date("Y-m-d", strtotime($return_departure_date));
		
			//var_dump($data);

			 $this->Flight_model->update_item($data, $id);
			 $this->session->set_flashdata('update', 'Record Updated Successfully'); 
			 redirect(base_url('index.php/flight/edit/' . $id));    
			//}

		//}
	}

	public function delete($id)
	{
		$item = $this->Flight_model->delete_item($id);
		$this->session->set_flashdata('delete', 'Record Deleted Successfully');
		redirect(base_url('index.php/flight'));
	}

	public function export()
	{

		$info = $this->Flight_model->get_all();
		

		$this->load->library('excel');

	    $objPHPexcel = new PHPExcel;

	    $objPHPexcel->getProperties()->setCreator(" ");
	    $objPHPexcel->getProperties()->setLastModifiedBy(" ");
	    $objPHPexcel->getProperties()->setTitle(" ");
	    $objPHPexcel->getProperties()->setSubject(" ");
		$objPHPexcel->getProperties()->setDescription(" ");
		
		// $cell_name = "A4";
		// $objPHPExcel->getActiveSheet()->getStyle( $cell_name )->getFont()->setBold( true );

		
		// $objPHPexcel->getActiveSheet()->getStyle('A4:AQ4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

		// //Style for all cells
		// $style = array(
		// 	'alignment' => array(
		// 		'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
		// 	)
		// );
	
		// $objPHPexcel->getDefaultStyle()->applyFromArray($style);

		

		$objPHPexcel->getActiveSheet()->getStyle("A4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("B4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("C4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("D4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("E4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("F4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("G4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("H4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("I4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("J4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("K4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("L4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("M4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("N4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("O4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("P4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("Q4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("R4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("S4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("T4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("U4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("V4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("W4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("X4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("Y4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("Z4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AA4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AB4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AC4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AD4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AE4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AF4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AG4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AH4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AI4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AJ4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AK4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AL4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AM4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AN4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AO4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AP4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AQ4")->getFont()->setBold(true);

		// $objPHPexcel->getActiveSheet()->getStyle('B')->getAlignment()->setHorizontal(
		// 	PHPExcel_Style_Alignment::HORIZONTAL_CENTER
		// );
		
		



	    $objPHPexcel->setActiveSheetIndex("0");
		
	    $objPHPexcel->getActiveSheet()->setCellValue("A4", "LINK KEY")->getColumnDimension("A")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("B4", "DIRECT BILL")->getColumnDimension('B')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("C4", "SUB BOOKING TYPE")->getColumnDimension('C')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("D4", "ISSUE DATE")->getColumnDimension('D')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("E4", "PASSENGER NAME")->getColumnDimension('E')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("F4", "TICKET No.")->getColumnDimension('F')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("G4", "PNR/LOCATOR")->getColumnDimension('G')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("H4", "AIRLINE NAME")->getColumnDimension('H')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("I4", "AIRLINE CODE")->getColumnDimension('I')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("J4", "AIRLINE NUMBER")->getColumnDimension('J')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("K4", "DEPARTURE CITY CODE")->getColumnDimension('K')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("L4", "DEPARTURE DATE")->getColumnDimension('L')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("M4", "DEPATURE TIME")->getColumnDimension('M')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("N4", "FLIGHT NO.")->getColumnDimension('N')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("O4", "ARRIVAL CITY CODE")->getColumnDimension('O')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("P4", "ARRIVAL DATE")->getColumnDimension('P')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("Q4", "ARRIVAL TIME")->getColumnDimension('Q')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("R4", "CLASS")->getColumnDimension('R')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("S4", "TRAVELER TYPE")->getColumnDimension('S')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("T4", "USER ID")->getColumnDimension('T')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("U4", "SAP ID")->getColumnDimension('U')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("V4", "COMPANY CODE")->getColumnDimension('V')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("W4", "COST CENTRE")->getColumnDimension('W')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("X4", "AUTH.ID NO")->getColumnDimension('X')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("Y4", "BASE FARE")->getColumnDimension('Y')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("Z4", "TOTAL TAX")->getColumnDimension('Z')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AA4", "AMOUNT")->getColumnDimension('AA')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("AB4", "SERVICE CHARGE")->getColumnDimension('AB')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AC4", "AFTER HOUR")->getColumnDimension('AC')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AD4", "TOTAL AMOUNT")->getColumnDimension('AD')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AE4", "TRAVEL_PURPOSE")->getColumnDimension('AE')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AF4", "PURPOSE OF TRIP")->getColumnDimension('AF')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("AG4", "FORM OF PAYMENT")->getColumnDimension('AG')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("AH4", "ROUTING")->getColumnDimension('AH')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AI4", "ORIGIN")->getColumnDimension('AI')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AJ4", "DESTINATION")->getColumnDimension('AJ')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("AK4", "ACCOUNT NAME")->getColumnDimension('AK')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("AL4", "REASON DESCRIPTION")->getColumnDimension('AL')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AM4", "TRANSACTION TYPE")->getColumnDimension('AM')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("AN4", "BOOKING DATE")->getColumnDimension('AN')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("AO4", "LOWEST QUOTE")->getColumnDimension('AO')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AP4", "REASON CODE")->getColumnDimension('AP')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AQ4", "FARE BASIS")->getColumnDimension('AQ')->setAutoSize(true);
																					
	    $row = 5;
	    //$nourut = 4;
		///var_dump($row);
	    foreach ($info as $data) {
		
	        $objPHPexcel->getActiveSheet()->setCellValue("A".$row, $data->link_key);
	        $objPHPexcel->getActiveSheet()->setCellValue("B".$row, $data->direct_bill);
			$objPHPexcel->getActiveSheet()->setCellValue("C".$row, $data->sub_booking_type);
				$issue_date = date('m/d/Y', strtotime($data->issue_date));
			$objPHPexcel->getActiveSheet()->setCellValue("D".$row, $issue_date);
			$objPHPexcel->getActiveSheet()->setCellValue("E".$row, $data->passenger_first_name.' '.$data->passenger_last_name);
	        $objPHPexcel->getActiveSheet()->setCellValue("F".$row, $data->ticket_no);
	        $objPHPexcel->getActiveSheet()->setCellValue("G".$row, $data->pnr_locator);
	        $objPHPexcel->getActiveSheet()->setCellValue("H".$row, $data->airline_name);
			$objPHPexcel->getActiveSheet()->setCellValue("I".$row, $data->airline_code);
			$objPHPexcel->getActiveSheet()->setCellValue("J".$row, $data->airline_no);
			$objPHPexcel->getActiveSheet()->setCellValue("K".$row, $data->departure_city_code);
				$departure_date = date('m/d/Y', strtotime($data->departure_date));
			$objPHPexcel->getActiveSheet()->setCellValue("L".$row, $departure_date);
				$departure_time = date('H:i', strtotime($data->departure_time));
	        $objPHPexcel->getActiveSheet()->setCellValue("M".$row, $departure_time);
			$objPHPexcel->getActiveSheet()->setCellValue("N".$row, $data->flight_no);
			$objPHPexcel->getActiveSheet()->setCellValue("O".$row, $data->arrival_city_code);
				$arrival_date = date('m/d/Y', strtotime($data->arrival_date));
			$objPHPexcel->getActiveSheet()->setCellValue("P".$row, $arrival_date);
				$arrival_time = date('H:i', strtotime($data->arrival_time));
	        $objPHPexcel->getActiveSheet()->setCellValue("Q".$row, $arrival_time);
	        $objPHPexcel->getActiveSheet()->setCellValue("R".$row, $data->class);
			$objPHPexcel->getActiveSheet()->setCellValue("S".$row, $data->traveller_type);
	        $objPHPexcel->getActiveSheet()->setCellValue("T".$row, $data->user_id);
	        $objPHPexcel->getActiveSheet()->setCellValue("U".$row, $data->sap_id);
	        $objPHPexcel->getActiveSheet()->setCellValue("V".$row, $data->company_code);
			$objPHPexcel->getActiveSheet()->setCellValue("W".$row, $data->cost_centre);
			$objPHPexcel->getActiveSheet()->setCellValue("X".$row, $data->auth_id_no);
	        $objPHPexcel->getActiveSheet()->setCellValue("Y".$row, (float)$data->base_fare);
	        $objPHPexcel->getActiveSheet()->setCellValue("Z".$row, (float)$data->total_tax);
	        $objPHPexcel->getActiveSheet()->setCellValue("AA".$row, (float)$data->amt);
			$objPHPexcel->getActiveSheet()->setCellValue("AB".$row, (float)$data->service_charge);
			$objPHPexcel->getActiveSheet()->setCellValue("AC".$row, (float)$data->after_hour);
			$objPHPexcel->getActiveSheet()->setCellValue("AD".$row, (float)$data->total_amount);
			$objPHPexcel->getActiveSheet()->setCellValue("AE".$row, $data->travel_purpose);
	        $objPHPexcel->getActiveSheet()->setCellValue("AF".$row, $data->purpose_of_trip);
	        $objPHPexcel->getActiveSheet()->setCellValue("AG".$row, $data->form_of_payment);
	        $objPHPexcel->getActiveSheet()->setCellValue("AH".$row, $data->routing);
			$objPHPexcel->getActiveSheet()->setCellValue("AI".$row, $data->origin);
			$objPHPexcel->getActiveSheet()->setCellValue("AJ".$row, $data->destination);
			$objPHPexcel->getActiveSheet()->setCellValue("AK".$row, $data->acct_name);
			$objPHPexcel->getActiveSheet()->setCellValue("AL".$row, $data->reason_description);
			$objPHPexcel->getActiveSheet()->setCellValue("AM".$row, $data->transaction_type);
					$booking_date = date('m/d/Y', strtotime($data->booking_date));
			$objPHPexcel->getActiveSheet()->setCellValue("AN".$row, $booking_date);
	        $objPHPexcel->getActiveSheet()->setCellValue("AO".$row, $data->lowest_qoute);
			$objPHPexcel->getActiveSheet()->setCellValue("AP".$row, $data->reason_code);
			$objPHPexcel->getActiveSheet()->setCellValue("AQ".$row, $data->fare_basis);
	
	        $row++;
	        //$nourut++;
	    }

	    //$namaFile = "encounter_data.xlsx";
		
		$writer=PHPExcel_IOFactory::createWriter($objPHPexcel, 'Excel2007');
	    header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	    header('Content-Disposition: attachment;filename="flightList.xlsx"');
	    header("Cache-Control: max-age=0 ");

		$objPHPexcel->getActiveSheet()->setTitle("Flight Data");
	    $writer->save('php://output');
	    exit;

	}


	
	public function dates_search()
	{
		$this->form_validation->set_rules('start_date', 'Start Date', 'required');
		$this->form_validation->set_rules('end_date', 'End Date', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			
		$this->session->set_flashdata('date_search_error', validation_errors());
		redirect(base_url('index.php/flight'));
		 }
		else
		{ 
			
			$start_date = date('Y-m-d', strtotime($this->input->post('start_date')));
			$end_date = date('Y-m-d', strtotime($this->input->post('end_date')));


			$data = array(
				'start_date' => $start_date,
				'end_date' => $end_date
			);

			$this->session->set_userdata('search_dates',$data);
			
			$data['dates_search'] = $this->Flight_model->search_by_dates($start_date, $end_date);

			///var_dump($data);
			  
			$data['content'] = 'flights/date_search';
			$this->load->view($this->layout, $data);
		}
	}

	public function dateExport()
	{
		$start_date = $this->session->userdata['search_dates']['start_date'];
		$end_date = $this->session->userdata['search_dates']['end_date'];
	
		$info = $this->Flight_model->search_by_dates($start_date, $end_date);

		$this->load->library('excel');

	    $objPHPexcel = new PHPExcel;

	    $objPHPexcel->getProperties()->setCreator(" ");
	    $objPHPexcel->getProperties()->setLastModifiedBy(" ");
	    $objPHPexcel->getProperties()->setTitle(" ");
	    $objPHPexcel->getProperties()->setSubject(" ");
		$objPHPexcel->getProperties()->setDescription(" ");
		
		// $cell_name = "A4";
		// $objPHPExcel->getActiveSheet()->getStyle( $cell_name )->getFont()->setBold( true );

		$objPHPexcel->getActiveSheet()->getStyle('A4:AQ4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

		

		$objPHPexcel->getActiveSheet()->getStyle("A4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("B4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("C4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("D4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("E4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("F4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("G4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("H4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("I4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("J4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("K4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("L4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("M4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("N4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("O4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("P4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("Q4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("R4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("S4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("T4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("U4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("V4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("W4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("X4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("Y4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("Z4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AA4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AB4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AC4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AD4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AE4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AF4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AG4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AH4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AI4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AJ4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AK4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AL4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AM4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AN4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AO4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AP4")->getFont()->setBold(true);
		$objPHPexcel->getActiveSheet()->getStyle("AQ4")->getFont()->setBold(true);

		// $objPHPexcel->getActiveSheet()->getStyle('B')->getAlignment()->setHorizontal(
		// 	PHPExcel_Style_Alignment::HORIZONTAL_CENTER
		// );
		
		$style = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			)
		);
	
		$objPHPexcel->getDefaultStyle()->applyFromArray($style);

		

	    $objPHPexcel->setActiveSheetIndex("0");
				

	    $objPHPexcel->getActiveSheet()->setCellValue("A4", "LINK KEY")->getColumnDimension("A")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("B4", "DIRECT BILL")->getColumnDimension('B')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("C4", "SUB BOOKING TYPE")->getColumnDimension('C')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("D4", "ISSUE DATE")->getColumnDimension('D')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("E4", "PASSENGER NAME")->getColumnDimension('E')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("F4", "TICKET No.")->getColumnDimension('F')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("G4", "PNR/LOCATOR")->getColumnDimension('G')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("H4", "AIRLINE NAME")->getColumnDimension('H')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("I4", "AIRLINE CODE")->getColumnDimension('I')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("J4", "AIRLINE NUMBER")->getColumnDimension('J')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("K4", "DEPARTURE CITY CODE")->getColumnDimension('K')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("L4", "DEPARTURE DATE")->getColumnDimension('L')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("M4", "DEPATURE TIME")->getColumnDimension('M')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("N4", "FLIGHT NO.")->getColumnDimension('N')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("O4", "ARRIVAL CITY CODE")->getColumnDimension('O')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("P4", "ARRIVAL DATE")->getColumnDimension('P')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("Q4", "ARRIVAL TIME")->getColumnDimension('Q')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("R4", "CLASS")->getColumnDimension('R')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("S4", "TRAVELER TYPE")->getColumnDimension('S')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("T4", "USER ID")->getColumnDimension('T')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("U4", "SAP ID")->getColumnDimension('U')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("V4", "COMPANY CODE")->getColumnDimension('V')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("W4", "COST CENTRE")->getColumnDimension('W')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("X4", "AUTH.ID NO")->getColumnDimension('X')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("Y4", "BASE FARE")->getColumnDimension('Y')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("Z4", "TOTAL TAX")->getColumnDimension('Z')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AA4", "AMOUNT")->getColumnDimension('AA')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("AB4", "SERVICE CHARGE")->getColumnDimension('AB')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AC4", "AFTER HOUR")->getColumnDimension('AC')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AD4", "TOTAL AMOUNT")->getColumnDimension('AD')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AE4", "TRAVEL_PURPOSE")->getColumnDimension('AE')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AF4", "PURPOSE OF TRIP")->getColumnDimension('AF')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("AG4", "FORM OF PAYMENT")->getColumnDimension('AG')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("AH4", "ROUTING")->getColumnDimension('AH')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AI4", "ORIGIN")->getColumnDimension('AI')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AJ4", "DESTINATION")->getColumnDimension('AJ')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("AK4", "ACCOUNT NAME")->getColumnDimension('AK')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("AL4", "REASON DESCRIPTION")->getColumnDimension('AL')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AM4", "TRANSACTION TYPE")->getColumnDimension('AM')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("AN4", "BOOKING DATE")->getColumnDimension('AN')->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("AO4", "LOWEST QUOTE")->getColumnDimension('AO')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AP4", "REASON CODE")->getColumnDimension('AP')->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AQ4", "FARE BASIS")->getColumnDimension('AQ')->setAutoSize(true);
																					
	    $row = 5;
	    //$nourut = 4;
		//var_dump($row);
	    foreach ($info as $data) {
	        $objPHPexcel->getActiveSheet()->setCellValue("A".$row, $data->link_key);
	        $objPHPexcel->getActiveSheet()->setCellValue("B".$row, $data->direct_bill);
			$objPHPexcel->getActiveSheet()->setCellValue("C".$row, $data->sub_booking_type);
				$issue_date = date('m/d/Y', strtotime($data->issue_date));
			$objPHPexcel->getActiveSheet()->setCellValue("D".$row, $issue_date);
			$objPHPexcel->getActiveSheet()->setCellValue("E".$row, $data->passenger_first_name.' '.$data->passenger_last_name);
	        $objPHPexcel->getActiveSheet()->setCellValue("F".$row, $data->ticket_no);
	        $objPHPexcel->getActiveSheet()->setCellValue("G".$row, $data->pnr_locator);
	        $objPHPexcel->getActiveSheet()->setCellValue("H".$row, $data->airline_name);
			$objPHPexcel->getActiveSheet()->setCellValue("I".$row, $data->airline_code);
			$objPHPexcel->getActiveSheet()->setCellValue("J".$row, $data->airline_no);
			$objPHPexcel->getActiveSheet()->setCellValue("K".$row, $data->departure_city_code);
				$departure_date = date('m/d/Y', strtotime($data->departure_date));
			$objPHPexcel->getActiveSheet()->setCellValue("L".$row, $departure_date);
				$departure_time = date('H:i', strtotime($data->departure_time));
	        $objPHPexcel->getActiveSheet()->setCellValue("M".$row, $departure_time);
			$objPHPexcel->getActiveSheet()->setCellValue("N".$row, $data->flight_no);
			$objPHPexcel->getActiveSheet()->setCellValue("O".$row, $data->arrival_city_code);
				$arrival_date = date('m/d/Y', strtotime($data->arrival_date));
			$objPHPexcel->getActiveSheet()->setCellValue("P".$row, $arrival_date);
				$arrival_time = date('H:i', strtotime($data->arrival_time));
	        $objPHPexcel->getActiveSheet()->setCellValue("Q".$row, $arrival_time);
	        $objPHPexcel->getActiveSheet()->setCellValue("R".$row, $data->class);
			$objPHPexcel->getActiveSheet()->setCellValue("S".$row, $data->traveller_type);
	        $objPHPexcel->getActiveSheet()->setCellValue("T".$row, $data->user_id);
	        $objPHPexcel->getActiveSheet()->setCellValue("U".$row, $data->sap_id);
	        $objPHPexcel->getActiveSheet()->setCellValue("V".$row, $data->company_code);
			$objPHPexcel->getActiveSheet()->setCellValue("W".$row, $data->cost_centre);
			$objPHPexcel->getActiveSheet()->setCellValue("X".$row, $data->auth_id_no);
			$objPHPexcel->getActiveSheet()->setCellValue("Y".$row, (float)$data->base_fare);
	        $objPHPexcel->getActiveSheet()->setCellValue("Z".$row, (float)$data->total_tax);
	        $objPHPexcel->getActiveSheet()->setCellValue("AA".$row, (float)$data->amt);
			$objPHPexcel->getActiveSheet()->setCellValue("AB".$row, (float)$data->service_charge);
			$objPHPexcel->getActiveSheet()->setCellValue("AC".$row, (float)$data->after_hour);
			$objPHPexcel->getActiveSheet()->setCellValue("AD".$row, (float)$data->total_amount);
			$objPHPexcel->getActiveSheet()->setCellValue("AE".$row, $data->travel_purpose);
	        $objPHPexcel->getActiveSheet()->setCellValue("AF".$row, $data->purpose_of_trip);
	        $objPHPexcel->getActiveSheet()->setCellValue("AG".$row, $data->form_of_payment);
	        $objPHPexcel->getActiveSheet()->setCellValue("AH".$row, $data->routing);
			$objPHPexcel->getActiveSheet()->setCellValue("AI".$row, $data->origin);
			$objPHPexcel->getActiveSheet()->setCellValue("AJ".$row, $data->destination);
			$objPHPexcel->getActiveSheet()->setCellValue("AK".$row, $data->acct_name);
			$objPHPexcel->getActiveSheet()->setCellValue("AL".$row, $data->reason_description);
			$objPHPexcel->getActiveSheet()->setCellValue("AM".$row, $data->transaction_type);
					$booking_date = date('m/d/Y', strtotime($data->booking_date));
			$objPHPexcel->getActiveSheet()->setCellValue("AN".$row, $booking_date);
	        $objPHPexcel->getActiveSheet()->setCellValue("AO".$row, $data->lowest_qoute);
			$objPHPexcel->getActiveSheet()->setCellValue("AP".$row, $data->reason_code);
			$objPHPexcel->getActiveSheet()->setCellValue("AQ".$row, $data->fare_basis);
	
	        $row++;
	        $nourut++;
	    }

	    //$namaFile = "encounter_data.xlsx";
		
		$writer=PHPExcel_IOFactory::createWriter($objPHPexcel, 'Excel2007');
	    header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	    header('Content-Disposition: attachment;filename="flightList.xlsx"');
	    header("Cache-Control: max-age=0 ");

		$objPHPexcel->getActiveSheet()->setTitle("Flight Data");
	    $writer->save('php://output');
		exit;
		
		$this->session->unset_userdata('search_dates');

	}

	

	public function csv(){ 
		// file name 
		$filename = 'flightdata_'.time().'.csv'; 
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$filename"); 
		header("Content-Type: application/csv; ");
		
		// get data 
		$flightData = $this->Flight_model->get_all();
	 
		// file creation 
		$file = fopen('php://output', 'w');

		$header = array("No","LINK KEY","DIRECT BILL","SUB BOOKING TYPE","ISSUE DATE","PASSENGER NAME","TICKET No.","PNR/LOCATOR","AIRLINE NAME","AIRLINE CODE","AIRLINE NUMBER",
		"DEPARTURE CITY CODE","DEPARTURE DATE","DEPATURE TIME","FLIGHT NO.","ARRIVAL CITY CODE",
		"ARRIVAL DATE","ARRIVAL TIME","CLASS","TRAVELER TYPE","USER ID","SAP ID","COMPANY CODE","COST CENTRE","AUTH.ID NO","BASE FARE","TOTAL TAX",
		"AMOUNT","SERVICE CHARGE","AFTER HOUR","TOTAL AMOUNT","PURPOSE OF TRIP","FORM OF PAYMENT","ROUTING","ORIGIN", "DESTINATION",
		"ACCOUNT NAME","REASON DESCRIPTION","TRANSACTION TYPE","CURRENCY CODE","BOOKING DATE","LOWEST QUOTE","REASON CODE","FARE BASIS"); 
		fputcsv($file, $header);
		$i = 4;
		foreach ($flightData as $line)
		{
			fputcsv($file,array($i, $line->link_key, $line->direct_bill, $line->sub_booking_type, $line->issue_date, $line->passenger_first_name . $line->passenger_middle_name . $line->passenger_last_name,
			$line->ticket_no, $line->pnr_locator, $line->airline_name, $line->airline_code, $line->airline_no, $line->departure_city_code,$line->departure_date, date('H:i', strtotime($line->departure_time)), $line->flight_no,$line->arrival_city_code
			,$line->arrival_date,date('H:i', strtotime($line->arrival_time)),$line->class, $line->traveller_type,$line->user_id,$line->sap_id,$line->company_code,$line->cost_centre,$line->auth_id_no,$line->base_fare,
			$line->total_tax,$line->amt,$line->service_charge,$line->after_hour,$line->total_amount,$line->purpose_of_trip,	$line->form_of_payment,$line->routing,$line->origin,$line->destination,$line->acct_name
			,$line->reason_description,$line->transaction_type,$line->currency_code, $line->booking_date, $line->lowest_qoute,$line->reason_code,$line->fare_basis));

			$i++;
		}
		

		fclose($file); 
		exit; 
	   }

	   public function dateCSV()
	   {

			$start_date = $this->session->userdata['search_dates']['start_date'];
			$end_date = $this->session->userdata['search_dates']['end_date'];

			//
			$flightData = $this->Flight_model->search_by_dates($start_date, $end_date);

			var_dump($flightData);

			// // file creation 
			// $file = fopen('php://output', 'w');

			// $header = array("No","LINK KEY","DIRECT BILL","SUB BOOKING TYPE","ISSUE DATE","PASSENGER NAME","TICKET No.","PNR/LOCATOR","AIRLINE NAME","AIRLINE CODE","AIRLINE NUMBER",
			// "DEPARTURE CITY CODE","DEPARTURE DATE","DEPATURE TIME","FLIGHT NO.","ARRIVAL CITY CODE",
			// "ARRIVAL DATE","ARRIVAL TIME","CLASS","TRAVELER TYPE","USER ID","SAP ID","COMPANY CODE","COST CENTRE","AUTH.ID NO","BASE FARE","TOTAL TAX",
			// "AMOUNT","SERVICE CHARGE","AFTER HOUR","TOTAL AMOUNT","PURPOSE OF TRIP","FORM OF PAYMENT","ROUTING","ORIGIN", "DESTINATION",
			// "ACCOUNT NAME","REASON DESCRIPTION","TRANSACTION TYPE","CURRENCY CODE","BOOKING DATE","LOWEST QUOTE","REASON CODE","FARE BASIS"); 
			// fputcsv($file, $header);
			// $i = 4;
			// foreach ($flightData as $line)
			// {
			// 	fputcsv($file,array($i, $line->link_key, $line->direct_bill, $line->sub_booking_type, $line->issue_date, $line->passenger_first_name . $line->passenger_middle_name . $line->passenger_last_name,
			// 	$line->ticket_no, $line->pnr_locator, $line->airline_name, $line->airline_code, $line->airline_no, $line->departure_city_code,$line->departure_date, date('H:i', strtotime($line->departure_time)), $line->flight_no,$line->arrival_city_code
			// 	,$line->arrival_date,date('H:i', strtotime($line->arrival_time)),$line->class, $line->traveller_type,$line->user_id,$line->sap_id,$line->company_code,$line->cost_centre,$line->auth_id_no,$line->base_fare,
			// 	$line->total_tax,$line->amt,$line->service_charge,$line->after_hour,$line->total_amount,$line->purpose_of_trip,	$line->form_of_payment,$line->routing,$line->origin,$line->destination,$line->acct_name
			// 	,$line->reason_description,$line->transaction_type,$line->currency_code, $line->booking_date, $line->lowest_qoute,$line->reason_code,$line->fare_basis));

			// 	$i++;
			// }
			

			// fclose($file); 
			// exit; 

	   }


}
