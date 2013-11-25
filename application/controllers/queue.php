<?php
class Queue extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('queue_model');
		$this->load->model('utility_model');
		$this->load->helper('url');
	}
	
	public function viewCustomerHome(){
		$this->load->view('templates/header/customer');
		$this->load->view('customer/home');
		$this->load->view('templates/footer/external');
		
	}
	
	public function viewEmployeeHome()
	{
		$date['time'] = $this->utility_model->getCurrentTimeString();
		$date['day'] = $this->utility_model->getCurrentDayString();
		$date['date'] = $this->utility_model->getCurrentDateString();
		
		$this->utility_model->viewHeaderEmployee();
		$this->load->view('employee/home', $date);
		$this->utility_model->viewFooterInternal();
	
	}
}
?>