<?php
class Queue_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getNumberOfCounters()
	{
		$this->db->select('company_num_of_counters');
		$this->db->from('company_info');
		$result = $this->db->get();
		return $result->row()->company_num_of_counters;
		
	}
	
}