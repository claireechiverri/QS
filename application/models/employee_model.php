<?php
class Employee_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->helper('date');
		$this->status_active = 1;
		$this->status_inactive = 0;
		$this->counter_inactive = -1;
		$this->user_type_employee = 0;
	}
	
	public function getNumberOfActiveEmployees()
	{
		$this->db->from('employee');
		$this->db->where('employee_status', $this->status_active);
		return $this->db->count_all_results();
	}
	
	public function getEmployeeList()
	{
		//$query = $this->db->get_where('employee', array('employee_status' => $this->status_active));
		$query = $this->db->get('employee');
		return $query->result();
	}
	
	public function addEmployee()
	{
		$username = $this->input->post('add_username');
		$emailad = $this->input->post('add_emailad'); 
		$password = $this->input->post('add_password');
		$counternum = $this->input->post('counternum');
		$ipaddress = $this->input->post('ipaddress'); 
		
		/*
		$data1 = array(
			'user_ip_address' => $ipaddress,
			'user_password' => $password,
			'user_email_address' => $emailad,
			'user_type' => $this->user_type_employee
			);
			
		$this->db->insert('user', $data1);
		
		$this->db->select_max('user_id');
		$query = $this->db->get('user');
		$row = $query->row_array();
		$result = $row['user_id'];
		*/
		
		$data = array(
			'employee_username' => $username, 
			'employee_counter_num' => $counternum, 
			'employee_date_registered' => date("Y-m-d"), 
			'employee_status' => $this->status_active,
			'employee_ip_address' => $ipaddress,
			'employee_password' => $password,
			'employee_email_address' => $emailad,			
			); 
	
		$this->db->insert('employee', $data);
		

		return $this->db->_error_number();		//error handling
		
	
	}
	public function deleteEmployee($id)
	{
		
		$data = array(
               'employee_status' => $this->status_inactive,
			   'employee_counter_num' => $this->counter_inactive
            );
		$this->db->where('employee_id', $id);
		$this->db->update('employee', $data); 
	}
}
	