<?php
class Log_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->helper('date');
		$this->login_action = 1;
		$this->logout_action = 0;
	
		
	}

	/** todo: check if checbox for inactive is checked 
	 ** todo: specify columns to show; select all unsafe
	 **/
	public function getEmployeeLogs()
	{
		$this->db->select('*');
		$this->db->from('user_log');
		$this->db->join('employee', 'user_logs_user_id = employee.employee_id');
		$this->db->where('user_log.user_logs_user_id !=', $this->user_model->user_id_admin);
		$query = $this->db->get();
		return $query->result();
	}
	
	/** 
	 ** todo: specify columns to show; select all unsafe
	 **/
	public function getAdminLogs()
	{
		$this->db->select('*');
		$this->db->from('user_log');
		$this->db->where('user_logs_user_id', $this->user_model->user_id_admin);
		$query = $this->db->get();
		return $query->result();
	}
	
	/** 
	 ** todo: specify columns to show; select all unsafe
	 **/
	public function getQueueLogs()
	{
		$this->db->select('*');
		$this->db->from('queue');
		$this->db->join('employee', 'queue_modified_by = employee.employee_id');
		//$this->db->where('user_log.user_logs_user_id !=', $this->user_model->user_id_admin);
		//$this->db->where('user_logs_user_id', $this->user_model->user_id_admin);
		$query = $this->db->get();
		return $query->result();
	}
	public function createLogForLogout()
	{
		$this->createLog($this->logout_action);
	}
	
	public function createLogForLogin()
	{
		$this->createLog($this->login_action);
	}
	
	
	public function createLog($action)
	{
		$data = array(
			'user_logs_user_id' => $this->session->userdata('user_id'), 
			'user_logs_action' => $action, 
			'user_logs_ip_address' => $this->session->userdata('ip_address')	
			); 
	
		$this->db->insert('user_log', $data);
	}
}