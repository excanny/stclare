<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Excel_hotel_import extends CI_Controller 
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
		$data['content'] = 'excel/excel_hotel_import';
		$this->load->view($this->layout, $data);
	}

	public function show($id)
	{
	   $data['excel_hotel'] = $this->Excel_import_model->find_item_hotel($id);
	   //var_dump($data);
	   $data['content'] = 'excel/single_hotel';
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
			$allDataInSheets = array_slice($allDataInSheet, 3);
			//array_shift($allDataInSheet);
			//var_dump($allDataInSheets);
			$flag = true;
			$i=0;
			foreach ($allDataInSheets as $value) {
			  if($flag)
			  {
				$flag =false;
				continue;
			  }

			  $insertdata[$i]['COUNTRY'] = $value['A'];
			  $insertdata[$i]['DIRECT_BILL_NO'] = $value['B'];
			  $insertdata[$i]['ISSUE_DATE'] = date("Y-m-d", strtotime($value['C']));
			  $insertdata[$i]['FIRST_NAME'] = $value['D'];
			  $insertdata[$i]['HOTEL_NAME'] = $value['E'];
			  $insertdata[$i]['HOTEL_ADDRESS'] = $value['F'];
			  $insertdata[$i]['HOTEL_CITY_CODE'] = $value['G'];
			  $insertdata[$i]['CITY'] = $value['H'];
			  $insertdata[$i]['STATE_CODE'] = $value['I'];
			  $insertdata[$i]['ZIP_CODE'] = $value['J'];
			  $insertdata[$i]['CHAIN_CODE'] = $value['K'];
			  $insertdata[$i]['HOTEL_PHONE_CODE'] = $value['L'];
			  $insertdata[$i]['CHECK_IN'] = date("Y-m-d", strtotime($value['M']));
			  $insertdata[$i]['CHECK_OUT'] = date("Y-m-d", strtotime($value['N']));
			  $insertdata[$i]['NO_OF_NIGHTS'] = $value['O'];
			  $insertdata[$i]['ROOM_TYPE'] = $value['P'];
			  $insertdata[$i]['HOTEL_RATE_CATEGORY'] = $value['Q'];
			  $insertdata[$i]['CONFIRMATION_NO'] = $value['R'];
			  $insertdata[$i]['BOOKING_STATUS'] = $value['S'];
			  $insertdata[$i]['TRAVELLER_TYPE'] = $value['T'];
			  $insertdata[$i]['USER_ID'] = $value['U'];
			  $insertdata[$i]['SAP_ID'] = $value['V'];
			  $insertdata[$i]['company_code'] = $value['W'];
			  $insertdata[$i]['COST_CENTRE'] = $value['X'];
			  $insertdata[$i]['AUTH_ID_NO'] = $value['Y'];
			  $insertdata[$i]['LOCAL_CURRENCY_CODE'] = $value['Z'];
			  $insertdata[$i]['RATE_NIGHT'] = $value['AA'];
			  $insertdata[$i]['AMT'] = $value['AB'];
			  $insertdata[$i]['SERVICE_CHARGE'] = $value['AC'];
			  $insertdata[$i]['AFTER_HOUR'] = $value['AD'];
			  $insertdata[$i]['TOTAL_AMOUNT'] = $value['AE'];
			  $insertdata[$i]['GDS_RECORD_LOCATOR'] = $value['AF'];
			  $i++;
			} 
				//var_dump($insertdata);
			$result = $this->Excel_import_model->import_data_hotel($insertdata);
			if($result)
			{
				$this->session->set_flashdata('excel_hotel_message', 'HOTEL FIELD excel file has been inserted into database');
					redirect('index.php/excel_hotel_import');
			}
			else
			{
				echo "ERROR !";
			}     
		}
		
	}
}

