<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Excel_ticket_import extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Excel_import_model');
		$this->load->library('upload');
		$this->layout = 'layouts/master';
	}

	public function index()
	{
		// $data['excel_tickets']=$this->Excel_import_model->get_all_tickets();
		// //var_dump($data);
		 $data['content'] = 'excel/excel_ticket_import';
		$this->load->view($this->layout, $data);
	}

	public function show($id)
	{
	   $data['excel_ticket'] = $this->Excel_import_model->find_item_ticket($id);
	   //var_dump($data);
	   $data['content'] = 'excel/single_ticket';
	  $this->load->view($this->layout, $data);
	}

 	// import excel data
	public function save()
    {
		$this->load->library('excel');

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'xlsx|csv|xls';
		$config['max_size'] = '10000';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( !$this->upload->do_upload('uploaded_file'))
		{
			$this->session->set_flashdata('error', $this->upload->display_errors());
		}
		else
		{
			$upload_data = $this->upload->data();	
		}

		$objPHPExcel = PHPExcel_IOFactory::load($upload_data['full_path']);

		if(!$objPHPExcel){
			$this->session->set_flashdata('error', 'Error uploading files or getting files. Please contact the admin');
			$this->create();
		}
		else
		{
			// $highestRow = $sheet->getHighestRow();
			// $highestColumn = $sheet->getHighestColumn();

			$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
			//array_shift($allDataInSheet);
			$allDataInSheets = array_slice($allDataInSheet, 3);
			//var_dump($allDataInSheet);
			$flag = true;
			$i=0;
			foreach ($allDataInSheets as $value) {
			if($flag)
			{
			$flag =false;
			continue;
			}

			  $insertdata[$i]['LINK_KEY'] = $value['A'];
			  $insertdata[$i]['DIRECT_BILL'] = $value['B'];
			  $insertdata[$i]['SUB_BOOKING_TYPE'] = $value['C'];
			  $insertdata[$i]['ISSUE_DATE'] = date("Y-m-d", strtotime($value['D']));
			  $insertdata[$i]['PASSENGER_FIRST_NAME'] = $value['E'];
			  $insertdata[$i]['TICKET_No'] = $value['F'];
			  $insertdata[$i]['PNR_LOCATOR'] = $value['G'];
			  $insertdata[$i]['AIRLINE_NAME'] = $value['H'];
			  $insertdata[$i]['AIRLINE_CODE'] = $value['I'];
			  $insertdata[$i]['AIRLINE_NO'] = $value['J'];
			  $insertdata[$i]['DEPARTURE_CITY_CODE'] = $value['K'];
			  $insertdata[$i]['DEPARTURE_DATE'] = date("Y-m-d", strtotime($value['L'])); 
			  $insertdata[$i]['DEPARTURE_TIME'] = date('H:i', strtotime($value['M']));;
			  $insertdata[$i]['FLIGHT_NO'] = $value['N'];
			  $insertdata[$i]['ARRIVAL_CITY_CODE'] = $value['O'];
			  $insertdata[$i]['ARRIVAL_DATE'] = date("Y-m-d", strtotime($value['P']));
			  $insertdata[$i]['ARRIVAL_TIME'] = date('H:i', strtotime($value['Q']));
			  $insertdata[$i]['CLASS'] = $value['R'];
			  $insertdata[$i]['TRAVELLER_TYPE'] = $value['S'];
			  $insertdata[$i]['USER_ID'] = $value['T'];
			  $insertdata[$i]['SAP_ID'] = $value['U'];
			  $insertdata[$i]['COMPANY_CODE'] = $value['V'];
			  $insertdata[$i]['COST_CENTRE'] = $value['W'];
			  $insertdata[$i]['AUTH_ID_NO'] = $value['X'];
			  $insertdata[$i]['BASE_FARE'] = $value['Y'];
			  $insertdata[$i]['TOTAL_TAX'] = $value['Z'];
			  $insertdata[$i]['AMT'] = $value['AA'];
			  $insertdata[$i]['SERVICE_CHARGE'] = $value['AB'];
			  $insertdata[$i]['AFTER_HOUR'] = $value['AC'];
			  $insertdata[$i]['TOTAL_AMOUNT'] = $value['AD'];
			  $insertdata[$i]['TRAVEL_PURPOSE'] = $value['AE'];
			  $insertdata[$i]['PURPOSE_OF_TRIP'] = $value['AF'];
			  $insertdata[$i]['FORM_OF_PAYMENT'] = $value['AG'];
			  $insertdata[$i]['ROUTING'] = $value['AH'];
			  $insertdata[$i]['ORIGIN'] = $value['AI'];
			  $insertdata[$i]['DESTINATION'] = $value['AJ'];
			  $insertdata[$i]['ACCT_NAME'] = $value['AK'];
			  $insertdata[$i]['REASON_DESCRIPTION'] = $value['AL'];
			  $insertdata[$i]['TRANSACTION_TYPE'] = $value['AM'];
			  $insertdata[$i]['BOOKING_DATE'] = date("Y-m-d", strtotime($value['AN']));
			  $insertdata[$i]['lowest_qoute'] = $value['AO'];
			  $insertdata[$i]['REASON_CODE'] = $value['AP'];
			  $insertdata[$i]['FARE_BASIS'] = $value['AQ'];
			  $i++;
			} 
			 //var_dump($insertdata);
			$result = $this->Excel_import_model->import_data_ticket($insertdata);
			if($result)
			{
				$this->session->set_flashdata('excel_ticket_message', 'TICKET FIELD excel file has been inserted into database');
					redirect('index.php/excel_ticket_import');
			}
			else
			{
				echo "ERROR !";
			}     
		}
		
	}
}

