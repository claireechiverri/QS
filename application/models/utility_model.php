<?php
class Utility_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->helper('date');
	}
	
	public function viewHeaderAdmin()
	{
		$this->load->view('templates/header/admin');
	}	
	
	public function viewHeaderEmployee()
	{
		$this->load->view('templates/header/employee');
	}
	
	public function viewHeaderCustomer()
	{
		$this->load->view('templates/header/customer');
	}
	
	public function viewFooterInternal()
	{
		$this->load->view('templates/footer/internal');
	}
	
	public function getCurrent()
	{	
		$timestamp = time();
		$timezone = 'UP7';
		$daylight_saving = TRUE;
		$now = gmt_to_local($timestamp, $timezone, $daylight_saving);
		$data['time'] = mdate("%h:%i %a", $now);
		$data['day'] = mdate("%l", $now);
		$data['date'] = mdate("%F %j, %Y", $now);
		return $data;
	}
	
	public function getCurrentDateString()
	{
		$current = $this->getCurrent();
		return $current['date'];
	}
	
	public function getCurrentTimeString()
	{
		$current = $this->getCurrent();
		return $current['time'];
	}
	
	public function getCurrentDayString()
	{
		$current = $this->getCurrent();
		return $current['day'];
	}
	
	public function getIPAddress()
	{
		$ip_address = $this->input->ip_address(); 
		return $ip_address;
	}	
	
	
}