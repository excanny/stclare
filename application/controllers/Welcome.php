<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	  $this->load->model('Hotel_model');
	  $this->load->model('Excel_import_model');
	  $this->layout = 'layouts/master';
	}

	public function index()
	{
		$data['flight_count'] = $this->Flight_model->count_all_flights();
		$data['hotel_count'] = $this->Hotel_model->count_all_hotels();
		
		$data['content'] = 'dashboard/index';
		$this->load->view($this->layout, $data);
	}
}
