<?php
class User_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function checkCredentials()
	{	
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		//$query = $this->db->select('*');
		//$query = $this->db->from('user');
		//$query = $this->db->where('user_username', $username);
		//$query = $this->db->where('user_password', $password);
		$query = $this->db->get_where('user', array('user_username' => $username));
		return $query->row();
	}
	public function getInfo(){
		/*test co check commit */
	}
}
?>