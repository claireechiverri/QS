<?php
class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->user_type_admin = 1;
		$this->user_id_admin = 1;
		$this->user_type_employee = 2;
		$this->table_admin = "admin";
		
		$this->load->model('user_model');
		$this->load->model('utility_model');
		$this->load->model('log_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		
		$config = Array(
			 'protocol' => 'smtp',
			 'smtp_host' => 'ssl://smtp.googlemail.com',
			 'smtp_port' => 465,
			 'smtp_user' => 'claireechiverri@gmail.com',
			 'smtp_pass' => 'test_password',
			 'mailtype' => 'html',
			 'charset' => 'iso-8859-1'
		);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

	}

	public function emailPassword($username)
	{
		$admin_emailad = $this->user_model->getEmailAddressAdmin();
		$recipient_emailad = $this->user_model->getEmailAddress($username);
		$recipient_password = $this->user_model->getPassword($username);
		
		$this->email->from($admin_emailad, 'Admin');
		$this->email->to($recipient_emailad);
		$this->email->subject('Account Details');
		$this->email->message("Your password is: ".$recipient_password);	
		return $this->email->send();
		//echo $this->email->print_debugger();

	}

	public function checkIPValidity()
	{
		$ip_address = $this->utility_model->getIPAddress();
		return $this->user_model->checkIPValidity($ip_address);
		
	}
	
	public function isLoggedIn()
	{
		return $this->session->userdata('logged_in');
	}
	
	public function redirectDefault()
	{
	
	}
	
	public function forgotPassword()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Forgot Password';
		$data['error_forgotpassword'] = false;
		$post_username = $this->input->post('username');

		$this->form_validation->set_rules('username', 'Username', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('user/forgot_password', $data);
		}
		else
		{				
			$is_valid = $this->user_model->checkUsernameValidity();
			if($is_valid == false)
			{
				$data['error_forgotpassword'] = true;
				
			}else{

				$send = $this->emailPassword($post_username);
				$data['error_sendpassword'] = ($send)?false:true;
				
			}
			$this->load->view('user/forgot_password', $data);
			
			
		}
	}
	
	public function logout()
	{
		$this->log_model->createLogForLogout();
		$this->session->sess_destroy();
		redirect('/login/', 'refresh');
	}
	
	public function login()
	{			
	
			if($this->checkIPValidity()){
				$data['error_login'] = false;

				$this->form_validation->set_rules('username', 'Username', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');			

				if ($this->form_validation->run() === FALSE)
				{
					$this->load->view('admin/login', $data);
				}
				else
				{
					$data_user = $this->user_model->validateCredentials();
					if (empty($data_user['row']))
					{
						$data['error_login'] = true;
						$this->load->view('admin/login', $data);
					}
					else
					{
											
						if($this->user_model->isAdmin($data_user['type']))
						{								
							$user_id = $this->user_model->getAdminInfo()->admin_id;
							$this->session->set_userdata('user_id', $user_id);
							$this->log_model->createLogForLogin();			
							redirect('/employee/viewEmployeeList/', 'refresh');							
						}else{
							$user_id = $this->user_model->getUserInfo()->employee_id;
							$this->session->set_userdata('user_id', $user_id);
							$this->log_model->createLogForLogin();
						
							redirect('/employee/home/', 'refresh');
						}	
						$this->log_model->createLogForLogin();
						
					}
				}

			}else{
				show_error("You cannot access this site.");
			}
			
		
	}
	
}