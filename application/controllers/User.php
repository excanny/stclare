<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public $layout;

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->model('User_model');
		$this->layout = 'layouts/master';
	}
	
	public function all_clients()
    {
		$data['users']=$this->User_model->get_all_users();
		//var_dump($data);
		$data['content'] = 'clients/all_clients';
		$this->load->view($this->layout, $data);
	}
	

	public function register()
	{
		$data['content'] = 'clients/register';
		$this->load->view($this->layout, $data);
	}
	
	public function edit($id)
	{
		$data['user'] = $this->User_model->find_user($id);
		//var_dump($data);
		$data['content'] = 'users/edit_user';
		$this->load->view($this->layout, $data);
	}

	public function show($id)
	{
	   $data['user'] = $this->User_model->find_user($id);
	   $data['content'] = 'users/single_user';
	   $this->load->view($this->layout, $data);
	}

	public function update($id)
	{
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect(base_url('index.php/user/edit/' . $id));
		}
		else
		{ 
			if (!empty($_POST))
				{
				$data = $this->input->post();
				$this->User_model->update_user($data, $id);
				$this->session->set_flashdata('user_update', 'Record Updated Successfully'); 
			redirect(base_url('index.php/user/edit/' . $id));    
			//var_dump($data);
			}
		}


	}
    
    public function register_action()
	{
        $this->form_validation->set_rules('client_name', 'Client Name', 'required');
        $this->form_validation->set_rules('client_id', 'Client ID', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[clients.email]',
        array(
                'is_unique'     => 'This %s address already exists. Choose another email address.'
        ));
        $this->form_validation->set_rules('pass_word', 'Password', 'required');
        $this->form_validation->set_rules('confirm_pass_word', 'Confirm Password', 'required|matches[pass_word]');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('register');
        }
        else
        {
            $data = array(
                'client_name' => strip_tags($this->input->post('client_name')),
                'client_id' => strip_tags($this->input->post('client_id')),
                'email' => strip_tags($this->input->post('email')),
                'pass_word' => md5($this->input->post('pass_word')),
            );
            //var_dump($data);
            $this->User_model->insert_user($data);
			$this->session->set_userdata('reg_success', 'User created successfully.');
			// if($this->session->userdata['logged_in']['level'] == 2)
			// {
				redirect('index.php/user/all_clients');
			// }
			// elseif($this->session->userdata['logged_in']['level'] == 1)
			// {
			// 	redirect('index.php/user/all_clients');
			// }
        }    
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function login_action()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('pass_word', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('login');
        }
        else
        {
            $email    = $this->input->post('email',TRUE);
            $password = md5($this->input->post('pass_word',TRUE));
            
            $validate = $this->User_model->validate_login($email, $password);
            if($validate)
            {
				$sess_array = array(
					'client_name' => $validate->client_name,
					 'client_id' => $validate->client_id,
					'email' => $validate->email,
					'level' => $validate->user_level
				);
				$this->session->set_userdata('logged_in', $sess_array);
	
               redirect('index.php/welcome');
            }
        	 else
            {
                $this->session->set_flashdata('login_error','Username or Password is Wrong');
                redirect('/');
            }
    
        }    
	}

	public function delete($id)
	{
		$item = $this->User_model->delete_user($id);
		$this->session->set_flashdata('delete_user', 'User deleted successfully');
		if($this->session->userdata['logged_in']['level'] == 2)
		{
			redirect('index.php/user/all_users_mods');
		}
		elseif($this->session->userdata['logged_in']['level'] == 1)
		{
			redirect('index.php/user/all_users');
		}
	}

	public function make_moderator($id){
		$this->User_model->update_user_level($id, $level = 1);
		redirect('index.php/user/all_users_mods');
	}

	public function remove_moderator($id){
		$this->User_model->update_user_level($id, $level = 0);
		redirect('index.php/user/all_users_mods');
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('/');
	}

}
