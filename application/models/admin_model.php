<?php
class Admin_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_teachers($user_ID = FALSE)
	{
		if ($user_ID === FALSE)
		{
			$query = $this->db->get('teachers');
			return $query->result_array();
		}

		$query = $this->db->get_where('teachers', array('user_ID' => $user_ID));
		return $query->row_array();
	}
	
	
	
}