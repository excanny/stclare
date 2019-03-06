<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Hotel_model extends CI_Model
	{ 
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function get_all()
		{
			return $this->db->get('hotels')->result();
		}

		public function get_all_hotels_by_client()
		{
			$company_code = $this->session->userdata['logged_in']['client_id'];
			$this->db->select('*');
			$this->db->from('hotels');
		 	$this->db->where('company_code', $company_code);
			
			$result = $this->db->get()->result();
			return $result;
		}

		public function count_all_hotels()
		{
			return $this->db->count_all_results('hotels');
		}

		public function insert_item($data)
		{
			$this->db->insert('hotels', $data);
			return $this->db->insert_id();
		}

		public function find_item($id)
		{
			return $this->db->get_where('hotels', array('id' => $id))->row();
		}

		public function update_item($data, $id)
		{
			$this->db->where('id',$id);
            return $this->db->update('hotels', $data);
		}

		public function delete_item($id)
		{
			return $this->db->delete('hotels', array('id' => $id));
		}

		// public function search_by_dates($start_date, $end_date)
		// {	
		// 	$this->db->select('*');
		// 	$this->db->from('hotels');
		// 	$this->db->where('issue_date >=', $start_date);
		// 	$this->db->where('issue_date <=', $end_date);

		// 	$result = $this->db->get()->result();
		// 	return $result;
			
		// }

		function search_by_dates($start_date, $end_date)
		{	
			$this->db->select('*');
			$this->db->from('hotels');
			$this->db->where('issue_date >=', $start_date);
			$this->db->where('issue_date <=', $end_date);

			$result = $this->db->get()->result();
			return $result;
		}

	}
