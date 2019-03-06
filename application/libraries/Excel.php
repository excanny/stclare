<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	//require_once('PHPExcel.php');
	//"C:\xampp\htdocs\WEBAPPS\stclare\application\third_party\PHPExcel\Classes\PHPExcel.php"
	require_once APPPATH . "/third_party/PHPExcel/Classes/PHPExcel.php";
	require_once APPPATH. "/third_party/PHPExcel/Classes/PHPExcel/Writer/Excel2007.php";
	require_once APPPATH. "/third_party/PHPExcel/Classes/PHPExcel/Cell/AdvancedValueBinder.php";
	

class Excel extends PHPExcel
{
	public function __construct()
	{
		parent::__construct();
	}
}

?>
