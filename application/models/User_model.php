<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    function insert_user($data)
    {
        $insert = $this->db->insert('clients', $data);
        return $this->db->insert_id();
    }

    function validate_login($email,$password)
    {
        $this->db->where('email',$email);
        $this->db->where('pass_word',$password);
        $result = $this->db->get('clients')->row();
        return $result;
	}
	
	function get_all_clients()
    {
		$this->db->where('user_level<', 1);
        return $this->db->get('clients')->result();
    }


    function find_user($id)
	{
		return $this->db->get_where('clients', array('id' => $id))->row();
	}

	function update_user($data, $id)
	{
		$this->db->where('id',$id);
		return $this->db->update('clients', $data);
	}

	function delete_user($id)
	{
		return $this->db->delete('clients', array('id' => $id));
	}

	function update_user_level($id, $level){
		$this->db->set('user_level', $level);
		$this->db->where('id', $id);
		$this->db->update('clients');
	}
}
