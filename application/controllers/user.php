<?php
class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper('url');
		$this->user_type_admin = 1;
		$this->user_type_employee = 0;
	}

	public function isAdmin($user_ID)
	{
		if($user_ID == $this->user_type_admin){
			return true;
		}else{
			return false;
		}
	}
	
	public function isEmployee($user_ID)
	{
		if($user_ID == $this->user_type_employee){
			return true;
		}else{
			return false;
		}
	}
	
	public function myinfo(){
		$this->load->view('templates/header/employee');
		$this->load->view('employee/myinfo');
		$this->load->view('templates/footer/internal');
	}
	
	public function login()
	{		
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Log In';

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('admin/login');
		}
		else
		{
			$data['user'] = $this->user_model->checkCredentials();
			if (empty($data['user']))
			{
				/* change error page */
				show_404();
			}
			else
			{
				/* transfer to utility class */
				$this->load->helper('date');
				$timestamp = time();
				$timezone = 'UP7';
				$daylight_saving = TRUE;
				$now = gmt_to_local($timestamp, $timezone, $daylight_saving);
				$data['time'] = mdate("%h:%i %a", $now);
				$data['day'] = mdate("%l", $now);
				$data['date'] = mdate("%F %j, %Y", $now);
				
				/* end of ulitity class */
				
				$data['type'] = $data['user']->user_type;
				if($this->isAdmin($data['type']))
				{	
					/*transfer to a function */
					$this->load->view('employee/viewEmployeeList');
					
				}
				else if($this->isEmployee($data['type']))
				{
					/*transfer to a function */
					$this->load->view('templates/header/employee');
			
					$view['view_employee_home'] = $this->load->view('employee/home', $data, true);
					$view['view_employee_myinfo'] = $this->load->view('employee/myinfo', $data, true);
					$this->load->view('employee/container', $view);
					$this->load->view('templates/footer/internal');


				}
			}
		}
		
	}
	
}