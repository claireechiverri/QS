<?php
class Employee extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('employee_model');
		$this->load->model('utility_model');
		$this->load->model('user_model');
		$this->load->model('queue_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function editCounterNumber()
	{
		$this->editEmployee('employee_counter_num');
	}
	public function editEmailAddress()
	{
		$this->editEmployee('employee_email_address');
	}

	public function editIPAddress()
	{
		$this->editEmployee('employee_ip_address');
	}
	public function editUsername()
	{
		$this->editEmployee('employee_username');
	}

	public function editEmployee($field)
	{
		$new = $this->input->post('value');
		$id = $this->input->post('id');
		//$this->form_validation->set_rules('value', 'Username', 'required');
		$this->employee_model->editEmployee($field);
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
	
	/** used for editable 
	 ** returned to ajax request
	 **/
	public function isUniqueUsername()
	{

		$data = array();
		$data['isUnique'] = $this->isUnique('employee_username');
		//$data['isUnique'] = false;
		echo json_encode($data);
	}

	public function isUniqueEmailAddress()
	{

		$data = array();
		$data['isUnique'] = $this->isUnique('employee_email_address');
		//$data['isUnique'] = false;
		echo json_encode($data);
	}

	public function isUniqueIPAddress()
	{
		$data = array();
		$data['isUnique'] = $this->isUnique('employee_ip_address');
		//$data['isUnique'] = false;
		echo json_encode($data);
	}


	public function isUnique($field){
		return $this->employee_model->isUnique($field);

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
		$error_db = $this->employee_model->deleteEmployee($id);
		if($error_db != 0)
		{
			$error = array();
			$error['error_flag'] = true;	
			$error['error_msg'] = "Something went wrong with deleting the employee";			
		}
		echo json_encode($error);
	}
	
	public function myinfo()
	{
		$info['row']= $this->employee_model->getMyinfo();
		$this->utility_model->viewHeaderEmployee();
		$this->load->view('employee/myinfo', $info);
		$this->utility_model->viewFooterInternal();
	}

}