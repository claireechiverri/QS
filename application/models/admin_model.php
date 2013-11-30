<?php
class Admin_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->library('session');
	}
	
	/*public function get_teachers($user_ID = FALSE)
	{
		if ($user_ID === FALSE)
		{
			$query = $this->db->get('teachers');
			return $query->result_array();
		}

		$query = $this->db->get_where('teachers', array('user_ID' => $user_ID));
		return $query->row_array();
	}
	*/
	
	public function getCompanyInfo()
	{
	   $query = $this->db->get('company_info');
	   
	   if ($query->num_rows() > 0)
		{
		   foreach($query->result() as $row)
		   {
			 $data = array(
						'company_contact_number' => $row->company_contact_number,
						'company_desc' => $row->company_desc,
						'company_num_of_counters' => $row->company_num_of_counters,
						'company_opening_time' => $row->company_opening_time,
						'company_closing_time' => $row->company_closing_time,
						'company_end_time' => $row->company_end_time,
						'company_time_limit' => $row->company_time_limit,
						'company_waiting_time' => $row->company_waiting_time
						);
		   }
		} 
		return $data;
	}
	
	public function getMyinfo()
	{
	
		$admin_id = $this->session->userdata('user_id');
		$query	= $this->db->get_where('admin', array('admin_id' => $admin_id));
		$row = $query->row();
		return $row;
	}
}