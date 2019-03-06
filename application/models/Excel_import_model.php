<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Excel_import_model extends CI_Model
	{
		public function import_data_ticket($insertdata)
		{
			$res = $this->db->insert_batch('flights', $insertdata);
			if($res)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}

		public function import_data_hotel($insertdata)
		{
			$res = $this->db->insert_batch('hotels', $insertdata);
			if($res)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}

		// //Get all tickets excel data
		// public function get_all_tickets()
		// {
		// 	return $this->db->get('excel_ticket')->result();
		// }

		// //Get single ticket excel data
		// public function find_item_ticket($id)
		// {
		// 	return $this->db->get_where('excel_ticket', array('id' => $id))->row();
		// }

		// //Get all hotels excel data
		// public function get_all_hotels()
		// {
		// 	return $this->db->get('excel_hotel')->result();
		// }

		// //Get single hotel excel data
		// public function find_item_hotel($id)
		// {
		// 	return $this->db->get_where('excel_hotel', array('id' => $id))->row();
		// }

		// public function count_all_excel_hotels()
		// {
		// 	return $this->db->count_all_results('excel_hotel');
		// }

		// public function count_all_excel_tickets()
		// {
		// 	return $this->db->count_all_results('excel_ticket');
		// }
	 
	}
