<?php
class Queue extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('queue_model');
	}
	
	public function viewCustomerHome(){
		$this->load->view('templates/header/customer');
		$this->load->view('customer/home');
		$this->load->view('templates/footer/external');
		
	}
}
?>