<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller 
{
	public $layout;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Hotel_model');
		$this->load->library('form_validation');
		$this->layout = 'layouts/master';
	}

	public function index()
	{	
		$data['hotels']=$this->Hotel_model->get_all();
		$data['content'] = 'hotels/all_hotels';
		$this->load->view($this->layout, $data);
	}
	

	public function create()
	{
		$data['content'] = 'hotels/hotel_add';
		$this->load->view($this->layout, $data);
	}

	public function store()
	{
		$data = $this->input->post();
		unset($data["issue_date"], $data["check_in"], $data["check_out"]); 
		$issue_date = $this->input->post("issue_date");
		$check_in = $this->input->post("check_in");
		$check_out = $this->input->post("check_out");
		$data["issue_date"] = date("Y-m-d", strtotime($issue_date));
		$data["check_in"] = date("Y-m-d", strtotime($check_in));
		$data["check_out"] = date("Y-m-d", strtotime($check_out));
		$id = $this->Hotel_model->insert_item($data);
		$this->session->set_flashdata('message', 'Record Created Successfully');
		redirect(base_url('index.php/hotel')); 
		//var_dump($data); 
	}

	public function show($id)
	{
		$data['hotel'] = $this->Hotel_model->find_item($id);
		$data['content'] = 'hotels/single_hotel';
		$this->load->view($this->layout, $data);
	}

	public function edit($id)
	{
		$data['hotel'] = $this->Hotel_model->find_item($id);
		$data['content'] = 'hotels/hotel_edit';
		$this->load->view($this->layout, $data);
	}

	public function update($id)
	{
		
		$data = $this->input->post();
		unset($data["issue_date"], $data["check_in"], $data["check_out"]); 
		$issue_date = $this->input->post("issue_date");
		$check_in = $this->input->post("check_in");
		$check_out = $this->input->post("check_out");
		$data["issue_date"] = date("Y-m-d", strtotime($issue_date));
		$data["check_in"] = date("Y-m-d", strtotime($check_in));
		$data["check_out"] = date("Y-m-d", strtotime($check_out));
		$this->Hotel_model->update_item($data, $id);
		$this->session->set_flashdata('update', 'Record Updated Successfully'); 
		redirect(base_url('index.php/hotel/edit/' . $id));    
		//var_dump($data);

	}

	public function delete($id)
	{
		$item = $this->Hotel_model->delete_item($id);
		$this->session->set_flashdata('delete', 'Record Deleted Successfully');
		redirect(base_url('index.php/hotel'));
	}

	public function export()
	{

		$info = $this->Hotel_model->get_all();
		//var_dump($info);

		$this->load->library('excel');

	    $objPHPexcel = new PHPExcel;

	    $objPHPexcel->getProperties()->setCreator(" ");
	    $objPHPexcel->getProperties()->setLastModifiedBy(" ");
	    $objPHPexcel->getProperties()->setTitle(" ");
	    $objPHPexcel->getProperties()->setSubject(" ");
		$objPHPexcel->getProperties()->setDescription(" ");
		
		$objPHPexcel->getActiveSheet()->getStyle("A4")->getFont()->setBold(true);
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

	    $objPHPexcel->setActiveSheetIndex("0");

		$objPHPexcel->getActiveSheet()->setCellValue("A4", "COUNTRY")->getColumnDimension("A")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("B4", "DIRECT BILL NO")->getColumnDimension("B")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("C4", "ISSUE DATE")->getColumnDimension("C")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("D4", "PASSENGER NAME")->getColumnDimension("D")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("E4", "HOTEL NAME")->getColumnDimension("E")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("F4", "HOTEL ADDRESS")->getColumnDimension("F")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("G4", "HOTEL CITY CODE")->getColumnDimension("G")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("H4", "CITY")->getColumnDimension("H")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("I4", "STATE CODE")->getColumnDimension("I")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("J4", "ZIP CODE")->getColumnDimension("J")->setAutoSize(true); 
		$objPHPexcel->getActiveSheet()->setCellValue("K4", "CHAIN CODE")->getColumnDimension("K")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("L4", "HOTEL PHONE NO")->getColumnDimension("L")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("M4", "CHECK IN")->getColumnDimension("M")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("N4", "CHECK OUT")->getColumnDimension("N")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("O4", "NO. OF NIGHT")->getColumnDimension("O")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("P4", "ROOM TYPE")->getColumnDimension("P")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("Q4", "HOTEL RATE CATEGORY")->getColumnDimension("Q")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("R4", "CONFIRMATION NO.")->getColumnDimension("R")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("S4", "BOOKING STATUS")->getColumnDimension("S")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("T4", "TRAVELER TYPE")->getColumnDimension("T")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("U4", "USER ID")->getColumnDimension("U")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("V4", "SAP ID")->getColumnDimension("V")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("W4", "COY CODE")->getColumnDimension("W")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("X4", "COST CENTRE")->getColumnDimension("X")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("Y4", "AUTH. ID NO")->getColumnDimension("Y")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("Z4", "LOCAL CURENCY CODE")->getColumnDimension("Z")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AA4", "RATE/NIGHT")->getColumnDimension("AA")->setAutoSize(true); 
		$objPHPexcel->getActiveSheet()->setCellValue("AB4", "AMOUNT")->getColumnDimension("AB")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("AC4", "SERVICE CHRG")->getColumnDimension("AC")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AD4", "AFTER HOUR")->getColumnDimension("AD")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AE4", "TOTAL AMOUNT")->getColumnDimension("AE")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("AF4", "GDS RECORD LOCATOR")->getColumnDimension("AF")->setAutoSize(true);
	
	    $row = 5;
	    //$nourut = 4;
		//var_dump($row);
	    foreach ($info as $data) {
	        $objPHPexcel->getActiveSheet()->setCellValue("A".$row, $data->country);
			$objPHPexcel->getActiveSheet()->setCellValue("B".$row, $data->direct_bill_no);
						$issue_date = date('m/d/Y', strtotime($data->issue_date));
	        $objPHPexcel->getActiveSheet()->setCellValue("C".$row, $issue_date);
	        $objPHPexcel->getActiveSheet()->setCellValue("D".$row, $data->first_name.' '.$data->last_name);
			$objPHPexcel->getActiveSheet()->setCellValue("E".$row, $data->hotel_name);
			$objPHPexcel->getActiveSheet()->setCellValue("F".$row, $data->hotel_address);
			$objPHPexcel->getActiveSheet()->setCellValue("G".$row, $data->hotel_city_code);
	        $objPHPexcel->getActiveSheet()->setCellValue("H".$row, $data->city);
	        $objPHPexcel->getActiveSheet()->setCellValue("I".$row, $data->state_code);
	        $objPHPexcel->getActiveSheet()->setCellValue("J".$row, $data->zip_code);
			$objPHPexcel->getActiveSheet()->setCellValue("K".$row, $data->chain_code);
			$objPHPexcel->getActiveSheet()->setCellValue("L".$row, $data->hotel_phone_code);
					$check_in = date('m/d/Y', strtotime($data->check_in));
			$objPHPexcel->getActiveSheet()->setCellValue("M".$row, $check_in);
					$check_out = date('m/d/Y', strtotime($data->check_out));
	        $objPHPexcel->getActiveSheet()->setCellValue("N".$row, $check_out);
	        $objPHPexcel->getActiveSheet()->setCellValue("O".$row, $data->no_of_nights);
	        $objPHPexcel->getActiveSheet()->setCellValue("P".$row, $data->room_type);
			$objPHPexcel->getActiveSheet()->setCellValue("Q".$row, $data->hotel_rate_category);
			$objPHPexcel->getActiveSheet()->setCellValue("R".$row, $data->confirmation_no);
			$objPHPexcel->getActiveSheet()->setCellValue("S".$row, $data->booking_status);
	        $objPHPexcel->getActiveSheet()->setCellValue("T".$row, $data->traveller_type);
	        $objPHPexcel->getActiveSheet()->setCellValue("U".$row, $data->user_id);
	        $objPHPexcel->getActiveSheet()->setCellValue("V".$row, $data->sap_id);
			$objPHPexcel->getActiveSheet()->setCellValue("W".$row, $data->company_code);
			$objPHPexcel->getActiveSheet()->setCellValue("X".$row, $data->cost_centre);
			$objPHPexcel->getActiveSheet()->setCellValue("Y".$row, $data->auth_id_no);
	        $objPHPexcel->getActiveSheet()->setCellValue("Z".$row, $data->local_currency_code);
	        $objPHPexcel->getActiveSheet()->setCellValue("AA".$row, (float)$data->rate_night);
	        $objPHPexcel->getActiveSheet()->setCellValue("AB".$row, (float)$data->amt);
			$objPHPexcel->getActiveSheet()->setCellValue("AC".$row, (float)$data->service_charge);
			$objPHPexcel->getActiveSheet()->setCellValue("AD".$row, (float)$data->after_hour);
			$objPHPexcel->getActiveSheet()->setCellValue("AE".$row, (float)$data->total_amount);
			$objPHPexcel->getActiveSheet()->setCellValue("AF".$row, $data->gds_record_locator);
	        
	        $row++;
	        $nourut++;
	    }

	    //$namaFile = "encounter_data.xlsx";
		
		$writer=PHPExcel_IOFactory::createWriter($objPHPexcel, 'Excel2007');
	    header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	    header('Content-Disposition: attachment;filename="hotelList.xlsx"');
	    header("Cache-Control: max-age=0 ");

		$objPHPexcel->getActiveSheet()->setTitle("Hotel Data");
	    $writer->save('php://output');
	    exit;

	}

	public function csv(){ 
		// // file name 
		$filename = 'hoteldata_'.date('m-d-y'). '_'.time().'.csv'; 
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$filename"); 
		header("Content-Type: application/csv; ");
		
		// get data 
		$hotelData = $this->Hotel_model->get_all();

		//var_dump($hotelData);
	 
		// // file creation 
		 $file = fopen('php://output', 'w');

		$header = array("No","DIRECT BILL NO","ISSUE DATE","PASSENGER NAME","HOTEL NAME","HOTEL ADDRESS","HOTEL CITY CODE","CITY","STATE CODE","ZIP CODE","CHAIN CODE",
		"HOTEL PHONE NO","CHECK IN","CHECK OUT","NO. OF NIGHT","ROOM TYPE",
		"HOTEL RATE CATEGORY","CONFIRMATION NO.","BOOKING STATUS","TRAVELER TYPE","USER ID","SAP ID","COY CODE","COST CENTRE","AUTH.ID NO","LOCAL CURENCY CODE","RATE/NIGHT",
		"AMOUNT","SERVICE CHARGE","AFTER HOUR","TOTAL AMOUNT","GDS RECORD LOCATOR","FORM OF PAYMENT","PAYMENT NUMBER","REASON CODE"); 
		
		fputcsv($file, $header);
		$i = 1;
		foreach ($hotelData as $line)
		{
			fputcsv($file,array($i, $line->direct_bill_no, $line->issue_date, $line->first_name . $line->middle_name . $line->last_name, $line->hotel_name, $line->hotel_address,
			$line->hotel_city_code, $line->city, $line->state_code, $line->zip_code, $line->chain_code, $line->hotel_phone_code,$line->check_in,$line->check_out,$line->no_of_nights,$line->room_type
			,$line->hotel_rate_category,$line->confirmation_no,$line->booking_status, $line->traveller_type,$line->user_id,$line->sap_id,$line->company_code,$line->cost_centre,$line->auth_id_no,$line->local_currency_code,
			$line->rate_night,$line->amt,$line->service_charge,$line->after_hour,$line->total_amount,$line->gds_record_locator,	$line->form_of_payment,$line->payment_no, $line->reason_code));

			$i++;
		}
		

		fclose($file); 
		exit; 
	   }

	   public function datecsv(){ 
		// // file name 
		$filename = 'hoteldata_'.date('m-d-y'). '_'.time().'.csv'; 
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$filename"); 
		header("Content-Type: application/csv; ");
		
		// get data 
			$start_date = $this->session->userdata['search_dates']['start_date'];
			$end_date = $this->session->userdata['search_dates']['end_date'];

			//
			$hotelData = $this->Hotel_model->search_by_dates($start_date, $end_date);

		//var_dump($hotelData);
	 
		// // file creation 
		 $file = fopen('php://output', 'w');

		$header = array("No","DIRECT BILL NO","ISSUE DATE","PASSENGER NAME","HOTEL NAME","HOTEL ADDRESS","HOTEL CITY CODE","CITY","STATE CODE","ZIP CODE","CHAIN CODE",
		"HOTEL PHONE NO","CHECK IN","CHECK OUT","NO. OF NIGHT","ROOM TYPE",
		"HOTEL RATE CATEGORY","CONFIRMATION NO.","BOOKING STATUS","TRAVELER TYPE","USER ID","SAP ID","COY CODE","COST CENTRE","AUTH.ID NO","LOCAL CURENCY CODE","RATE/NIGHT",
		"AMOUNT","SERVICE CHARGE","AFTER HOUR","TOTAL AMOUNT","GDS RECORD LOCATOR","FORM OF PAYMENT","PAYMENT NUMBER","REASON CODE"); 
		
		fputcsv($file, $header);
		$i = 4;
		foreach ($hotelData as $line)
		{
			fputcsv($file,array($i, $line->direct_bill_no, $line->issue_date, $line->first_name . $line->middle_name . $line->last_name, $line->hotel_name, $line->hotel_address,
			$line->hotel_city_code, $line->city, $line->state_code, $line->zip_code, $line->chain_code, $line->hotel_phone_code,$line->check_in,$line->check_out,$line->no_of_nights,$line->room_type
			,$line->hotel_rate_category,$line->confirmation_no,$line->booking_status, $line->traveller_type,$line->user_id,$line->sap_id,$line->company_code,$line->cost_centre,$line->auth_id_no,$line->local_currency_code,
			$line->rate_night,$line->amt,$line->service_charge,$line->after_hour,$line->total_amount,$line->gds_record_locator,	$line->form_of_payment,$line->payment_no, $line->reason_code));

			$i++;
		}
		

		fclose($file); 
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
			
			$data['dates_search'] = $this->Hotel_model->search_by_dates($start_date, $end_date);

			//var_dump($data);
			  
			$data['content'] = 'hotels/date_search';
			$this->load->view($this->layout, $data);
		}
	}

	public function dateExport()
	{
		$start_date = $this->session->userdata['search_dates']['start_date'];
		$end_date = $this->session->userdata['search_dates']['end_date'];
	
		$info = $this->Hotel_model->search_by_dates($start_date, $end_date);

		$this->load->library('excel');

	    $objPHPexcel = new PHPExcel;

	    $objPHPexcel->getProperties()->setCreator(" ");
	    $objPHPexcel->getProperties()->setLastModifiedBy(" ");
	    $objPHPexcel->getProperties()->setTitle(" ");
	    $objPHPexcel->getProperties()->setSubject(" ");
		$objPHPexcel->getProperties()->setDescription(" ");
		
		// $cell_name = "A4";
		// $objPHPExcel->getActiveSheet()->getStyle( $cell_name )->getFont()->setBold( true );

		$objPHPexcel->getActiveSheet()->getStyle("A4")->getFont()->setBold(true);
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
		

	    $objPHPexcel->setActiveSheetIndex("0");
				
		$objPHPexcel->getActiveSheet()->setCellValue("A4", "COUNTRY")->getColumnDimension("A")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("B4", "DIRECT BILL NO")->getColumnDimension("B")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("C4", "ISSUE DATE")->getColumnDimension("C")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("D4", "PASSENGER NAME")->getColumnDimension("D")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("E4", "HOTEL NAME")->getColumnDimension("E")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("F4", "HOTEL ADDRESS")->getColumnDimension("F")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("G4", "HOTEL CITY CODE")->getColumnDimension("G")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("H4", "CITY")->getColumnDimension("H")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("I4", "STATE CODE")->getColumnDimension("I")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("J4", "ZIP CODE")->getColumnDimension("J")->setAutoSize(true); 
		$objPHPexcel->getActiveSheet()->setCellValue("K4", "CHAIN CODE")->getColumnDimension("K")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("L4", "HOTEL PHONE NO")->getColumnDimension("L")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("M4", "CHECK IN")->getColumnDimension("M")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("N4", "CHECK OUT")->getColumnDimension("N")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("O4", "NO. OF NIGHT")->getColumnDimension("O")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("P4", "ROOM TYPE")->getColumnDimension("P")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("Q4", "HOTEL RATE CATEGORY")->getColumnDimension("Q")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("R4", "CONFIRMATION NO.")->getColumnDimension("R")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("S4", "BOOKING STATUS")->getColumnDimension("S")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("T4", "TRAVELER TYPE")->getColumnDimension("T")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("U4", "USER ID")->getColumnDimension("U")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("V4", "SAP ID")->getColumnDimension("V")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("W4", "COY CODE")->getColumnDimension("W")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("X4", "COST CENTRE")->getColumnDimension("X")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("Y4", "AUTH. ID NO")->getColumnDimension("Y")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("Z4", "LOCAL CURENCY CODE")->getColumnDimension("Z")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AA4", "RATE/NIGHT")->getColumnDimension("AA")->setAutoSize(true); 
		$objPHPexcel->getActiveSheet()->setCellValue("AB4", "AMOUNT")->getColumnDimension("AB")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("AC4", "SERVICE CHRG")->getColumnDimension("AC")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AD4", "AFTER HOUR")->getColumnDimension("AD")->setAutoSize(true);
		$objPHPexcel->getActiveSheet()->setCellValue("AE4", "TOTAL AMOUNT")->getColumnDimension("AE")->setAutoSize(true);
	    $objPHPexcel->getActiveSheet()->setCellValue("AF4", "GDS RECORD LOCATOR")->getColumnDimension("AF")->setAutoSize(true);
																					
	    $row = 5;
	    //$nourut = 1;
		//var_dump($row);
	    foreach ($info as $data) {
	        $objPHPexcel->getActiveSheet()->setCellValue("A".$row, $data->country);
			$objPHPexcel->getActiveSheet()->setCellValue("B".$row, $data->direct_bill_no);
						$issue_date = date('m/d/Y', strtotime($data->issue_date));
	        $objPHPexcel->getActiveSheet()->setCellValue("C".$row, $issue_date);
	        $objPHPexcel->getActiveSheet()->setCellValue("D".$row, $data->first_name.' '.$data->last_name);
			$objPHPexcel->getActiveSheet()->setCellValue("E".$row, $data->hotel_name);
			$objPHPexcel->getActiveSheet()->setCellValue("F".$row, $data->hotel_address);
			$objPHPexcel->getActiveSheet()->setCellValue("G".$row, $data->hotel_city_code);
	        $objPHPexcel->getActiveSheet()->setCellValue("H".$row, $data->city);
	        $objPHPexcel->getActiveSheet()->setCellValue("I".$row, $data->state_code);
	        $objPHPexcel->getActiveSheet()->setCellValue("J".$row, $data->zip_code);
			$objPHPexcel->getActiveSheet()->setCellValue("K".$row, $data->chain_code);
			$objPHPexcel->getActiveSheet()->setCellValue("L".$row, $data->hotel_phone_code);
					$check_in = date('m/d/Y', strtotime($data->check_in));
			$objPHPexcel->getActiveSheet()->setCellValue("M".$row, $check_in);
					$check_out = date('m/d/Y', strtotime($data->check_out));
	        $objPHPexcel->getActiveSheet()->setCellValue("N".$row, $check_out);
	        $objPHPexcel->getActiveSheet()->setCellValue("O".$row, $data->no_of_nights);
	        $objPHPexcel->getActiveSheet()->setCellValue("P".$row, $data->room_type);
			$objPHPexcel->getActiveSheet()->setCellValue("Q".$row, $data->hotel_rate_category);
			$objPHPexcel->getActiveSheet()->setCellValue("R".$row, $data->confirmation_no);
			$objPHPexcel->getActiveSheet()->setCellValue("S".$row, $data->booking_status);
	        $objPHPexcel->getActiveSheet()->setCellValue("T".$row, $data->traveller_type);
	        $objPHPexcel->getActiveSheet()->setCellValue("U".$row, $data->user_id);
	        $objPHPexcel->getActiveSheet()->setCellValue("V".$row, $data->sap_id);
			$objPHPexcel->getActiveSheet()->setCellValue("W".$row, $data->company_code);
			$objPHPexcel->getActiveSheet()->setCellValue("X".$row, $data->cost_centre);
			$objPHPexcel->getActiveSheet()->setCellValue("Y".$row, $data->auth_id_no);
	        $objPHPexcel->getActiveSheet()->setCellValue("Z".$row, $data->local_currency_code);
	        $objPHPexcel->getActiveSheet()->setCellValue("AA".$row, (float)$data->rate_night);
	        $objPHPexcel->getActiveSheet()->setCellValue("AB".$row, (float)$data->amt);
			$objPHPexcel->getActiveSheet()->setCellValue("AC".$row, (float)$data->service_charge);
			$objPHPexcel->getActiveSheet()->setCellValue("AD".$row, (float)$data->after_hour);
			$objPHPexcel->getActiveSheet()->setCellValue("AE".$row, (float)$data->total_amount);
			$objPHPexcel->getActiveSheet()->setCellValue("AF".$row, $data->gds_record_locator);
	
	        $row++;
	        $nourut++;
	    }

	    //$namaFile = "encounter_data.xlsx";
		
		$writer=PHPExcel_IOFactory::createWriter($objPHPexcel, 'Excel2007');
	    header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	    header('Content-Disposition: attachment;filename="hotelList.xlsx"');
	    header("Cache-Control: max-age=0 ");

		$objPHPexcel->getActiveSheet()->setTitle("Flight Data");
	    $writer->save('php://output');
		exit;
		
		$this->session->unset_userdata('search_dates');

	}

}
