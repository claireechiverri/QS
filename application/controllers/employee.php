<?php
class Employee extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('employee_model');
		$this->load->model('utility_model');
		$this->load->model('queue_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('javascript');
	}
	public function editEmployee()
	{
		$new = $this->input->post('value');
		$this->form_validation->set_rules('value', 'Username', 'required');
		echo $new;
	}
	public function viewEmployeeList()
	{
		$this->load->view('templates/header/admin');
		$data['employee_list'] = $this->getEmployeeList();
		$this->load->view('employee/employee_list.php', $data);
		$this->load->view('templates/footer/internal');
	}
	
	public function getEmployeeList()
	{
		return $this->employee_model->getEmployeeList();
	
	}
	public function getNumberOfEmployees()
	{
		return $this->employee_model->getNumberOfEmployees();
	}
	
	public function canAddEmployee()
	{
		$no_of_counters = $this->queue_model->getNumberOfCounters();
		$no_of_employees = $this->employee_model->getNumberOfActiveEmployees();
		return ($no_of_counters > $no_of_employees)?true:false;
	}
	
	public function viewAddEmployee()
	{
		$this->addEmployee();
	}
	
	public function addEmployee()
	{
		$this->utility_model->viewHeaderAdmin();
		$data['no_of_counters'] = $this->queue_model->getNumberOfCounters();
		$data['ip_address'] = $this->utility_model->getIPAddress();
		//$test['no_of_employees'] = $this->employee_model->getNumberOfActiveEmployees();
		//$data['error_add_employee'] = false; 
		//$data['error_add_employee_db'] = false; 
		
		if($this->canAddEmployee())
		{	
			$this->form_validation->set_rules('add_username', 'Username', 'required|is_unique[employee.employee_username]|max_length[45]|min_length[3]');		
			$this->form_validation->set_rules('add_password', 'Password', 'required|max_length[45]|min_length[3]');		
			$this->form_validation->set_rules('confirmpassword', 'Password', 'required|matches[add_password]|max_length[45]|min_length[3]');
			$this->form_validation->set_rules('add_emailad', 'Email Address', 'required|valid_email|is_unique[employee.employee_email_address]|max_length[45]');		
			$this->form_validation->set_rules('ipaddress', 'IP Address', 'required|valid_ip[ipaddress]|is_unique[employee.employee_ip_address]');
			$this->form_validation->set_rules('counternum', 'Counter number', 'required|is_unique[employee.employee_counter_num]|greater_than[0]');
			
			$this->form_validation->set_message('greater_than', '%s should not be 0.');
			
			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('employee/add_employee', $data);
			
			}else{
				$data['error_add_employee_db'] = $this->employee_model->addEmployee();
				if($this->canAddEmployee())
					$data['error_add_employee'] = false;
				else
					$data['error_add_employee'] = true;
				$this->load->view('employee/add_employee', $data);
			}
		}else{
			$data['error_add_employee'] = true;
			$this->load->view('employee/add_employee', $data);
		}	
		$this->utility_model->viewFooterInternal();
	}
	
	public function deleteEmployee()
	{
		$id = $this->input->post('employee_id');
		$this->employee_model->deleteEmployee($id);
		$data['success_delete'] = true;
		$this->viewEmployeeList();
	}
	
	
	
	

}