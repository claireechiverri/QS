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

	public function viewFooterExternal()
	{
		$this->load->view('templates/footer/external');
	}
	
	
	public function getCurrent()
	{	
		$timestamp = time();
		$timezone = 'UP7';
		$daylight_saving = TRUE;
		$now = gmt_to_local($timestamp, $timezone, $daylight_saving);
		return $now;
	}
	
	// 24-hour time format
	public function getCurrentTimestamp()
	{
		$current = $this->getCurrent();
		return unix_to_human($current, TRUE, 'eu');
	}
	
	//format "November 5, 2013"
	public function getCurrentDateString()
	{
		$current = $this->getCurrent();
		return mdate("%F %j, %Y", $current);
		
	}
	
	//format 6:35 pm
	public function getCurrentTimeString()
	{
		$current = $this->getCurrent();
		return mdate("%h:%i %a", $current);
	}
	
	public function getCurrentDayString()
	{
		$current = $this->getCurrent();
		return mdate("%l", $current);
	}
	
	public function getIPAddress()
	{
		$ip_address = $this->input->ip_address(); 
		return $ip_address;
	}	
	
	
}