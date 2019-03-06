<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Flight_model extends CI_Model
	{ 
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}


		public function count_all_flights()
		{
			return $this->db->count_all_results('flights');
		}

		public function get_all()
		{
			return $this->db->get('flights')->result();
		}

		public function find_item($id)
		{
			return $this->db->get_where('flights', array('id' => $id))->row();
		}

		public function insert_item($data)
		{
			$this->db->insert('flights', $data);
			return $this->db->insert_id();
		}

		public function update_item($data, $id)
		{
			$this->db->where('id',$id);
            return $this->db->update('flights', $data);
		}

		public function delete_item($id)
		{
			return $this->db->delete('flights', array('id' => $id));
		}

		function search_by_dates($start_date, $end_date)
		{	
			$this->db->select('*');
			$this->db->from('flights');
			$this->db->where('booking_date >=', $start_date);
			$this->db->where('booking_date <=', $end_date);

			$result = $this->db->get()->result();
			return $result;
		}
		

	}
