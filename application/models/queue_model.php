<?php
class Queue_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->model('utility_model');
		$this->load->model('admin_model');
		$this->load->helper('date');
		$this->start_priority_number = 1;

		$this->status_cancelled = -1;
		$this->status_pending = 0;
		$this->status_done = 1;
		$this->status_invalid = 2;

	}
	
	public function getNumberOfCounters()
	{
		$this->db->select('company_num_of_counters');
		$this->db->from('company_info');
		$result = $this->db->get();
		return $result->row()->company_num_of_counters;
		
	}
	public function generateHashKey()
	{
		return random_string('alnum', 7);
	}


	
	public function canGetPriorityNumber()
	{
		$ip_address = $this->utility_model->getIPAddress();
		$now = now();
		$return_val = false;
		$company_time_limit = $this->admin_model->getCompanyInfo();
		$company_time_limit = $company_time_limit['company_time_limit'];
		$query = $this->db->get_where("queue", array("queue_ip_address_owner" => $ip_address));
		$row = $query->row();
		if(!empty($row)){
			$last_date_taken = human_to_unix($query->row()->queue_date_taken);
			if(($now - $last_date_taken) > $company_time_limit)
				$return_val = true;
			else
				$return_val = false;
		}else{
			$return_val = true;
		}

		return $return_val;	

	}
	public function getLastNumberTaken()
	{
		$this->db->select('queue_priority_num');
		$this->db->from('queue');
		$this->db->order_by('queue_id', 'desc');
		$this->db->limit(1);
		$result = $this->db->get();
		return $result->row()->queue_priority_num;
	}

	public function getPriorityNumber()
	{

			$ip_address = $this->utility_model->getIPAddress();
			$hash_key = $this->generateHashKey();
			$now = unix_to_human(now());
			$priority_num = $this->getLastNumberTaken() + 1;
			//$today = 	
			//$query = $this->db->get_where('queue', array('queue_date_taken' => $today));
			$data = array( 
			'queue_ip_address_owner' => $ip_address,
			'queue_verification_key' => $hash_key,
			'queue_date_taken' => $now,
			'queue_status' => $this->status_pending,
			'queue_priority_num' => $priority_num			
			); 
	
		$this->db->insert('queue', $data);
		$ret = array('hash_key' => $hash_key, 'priority_num' => $priority_num);
		return $ret;
		
	}

	
	public function testTimestamp()
	{
		$company_time_limit = $this->admin_model->getCompanyInfo();
		$company_time_limit = $company_time_limit['company_time_limit'];
		$ip_address = $this->utility_model->getIPAddress();		
		$now = now();

		$query = $this->db->get_where("queue", array("queue_ip_address_owner" => $ip_address));

		$time = human_to_unix($query->row()->queue_date_taken); 
		$date['one'] = $now;
		$date['two'] = $time;

		return ($now-$time)/60;
		//return $this->utility_model->getCurrent();
		//return (empty($query->row()))?"no":"yes";	
	}
}