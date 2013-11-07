<?php
class Employee extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('employee_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('javascript');
	}
	
	public function viewEmployeeList()
	{
		$this->load->view('templates/header/admin');
		$this->load->view('employee/employee_list.php');
		$this->load->view('templates/footer/internal');
	}
	public function viewAddEmployee()
	{
		$this->addEmployee();
	}
	public function home(){
		$this->load->view('templates/header/employee');
	}
	
	public function addEmployee()
	{
		$this->load->view('templates/header/admin');
		
		$this->form_validation->set_rules('add_username', 'Username', 'required');
		$this->form_validation->set_rules('add_password', 'Password', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('employee/add_employee');
		}
		else
		{
			$this->load->view('employee/add_employee');
		}
		
		$this->load->view('templates/footer/internal');
	
	}
	
	public function deleteEmployee()
	{
	
	}
	
	public function getEmployeeList()
	{
	
	
	}
	
	

}