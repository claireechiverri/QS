<?php
class Queue extends CI_Controller {

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
		$this->load->library('javascript');
		$this->load->library('session');
	}
	
	public function viewCustomerHome(){
		$this->load->view('templates/header/customer');
		$data['last_number'] = $this->queue_model->getLastNumberTaken();
		$this->load->view('customer/home', $data);
		$this->load->view('templates/footer/external');
		
	}
	
	public function viewEmployeeHome()
	{
		$data['time'] = $this->utility_model->getCurrentTimeString();
		$data['day'] = $this->utility_model->getCurrentDayString();
		$data['date'] = $this->utility_model->getCurrentDateString();
		$data['last_number'] = $this->queue_model->getLastNumberTaken();
		$this->utility_model->viewHeaderEmployee();
		$this->load->view('employee/home', $data);
		$this->utility_model->viewFooterInternal();
	
	}
	
	public function generateHashKey()
	{
		return random_string('alnum', 7);
	}
	
	public function getPriorityNumber()
	{
		//if canGetPriorityNumber
		$pn =  $this->queue_model->getPriorityNumber();
		//$data= array();
			//$data['pn'] = $pn['priority_num'];
		$data['hashkey'] = $pn['hash_key'];			
		$data['pn'] = $pn['priority_num'];
		echo json_encode($data);
		
	}

	public function viewAboutTheCompany()
	{
		$this->utility_model->viewHeaderCustomer();
		$this->load->view('customer/about');
		$this->utility_model->viewFooterExternal();
	}
	public function viewCustomerHelp()
	{
		$this->utility_model->viewHeaderCustomer();
		$data['test'] = $this->queue_model->testTimestamp();
		$this->load->view('customer/help', $data);
		$this->utility_model->viewFooterExternal();
	}
}
?>