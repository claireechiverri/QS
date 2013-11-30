<?php
class User_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->user_type_admin = 1;
		$this->user_id_admin = 1;
		$this->user_type_employee = 2;
		$this->table_admin = "admin";
		$this->table_employee = "employee";
		
	}
	
	public function isAdmin($user_type)
	{
		return ($user_type == $this->user_type_admin)?true:false;
	}
	
	
	/**		this function assumes that username passed is already exisitng 
	 **		CAE 11/24
	 **/
	public function userTypeIdentifier($username)
	{
		$query_admin = $this->db->get_where('admin', array('admin_username' => $username));
		$row_admin = $query_admin->row();
		$type = (empty($row_admin))?$this->user_type_employee:$this->user_type_admin;
		return $type;
	}
	
	/**	for Forgot Password functionality
	*/
	public function getEmailAddress($username)
	{
		// should use getUserInfo
		$type = $this->userTypeIdentifier($username);
		$table = ($this->isAdmin($type))?$this->table_admin:$this->table_employee;
		$query	= $this->db->get_where($table, array($table.'_username' => $username));
		$row = $query->row();
		$email = ($this->isAdmin($type))?$row->admin_email_address:$row->employee_email_address;
		return $email;
	}
	
	public function getUserInfo()
	{
		$username = $this->input->post('username');
		$type = $this->userTypeIdentifier($username);
		$table = ($this->isAdmin($type))?$this->table_admin:$this->table_employee;
		$query	= $this->db->get_where($table, array($table.'_username' => $username));
		$row = $query->row();
		return $row;
	}
	
	public function getEmployeeInfo()
	{
		$username = $this->input->post('username');
		$query	= $this->db->get_where('employee', array('employee_username' => $username));
		$row = $query->row();
		return $row;
	}
	
	public function getEmailAddressAdmin()
	{
		$query_admin = $this->db->get_where('admin', array('admin_id' => $this->user_id_admin));
		$row_admin = $query_admin->row();
		return $row_admin->admin_email_address;
	}
	
	public function getAdminInfo()
	{
		$query_admin = $this->db->get('admin');
		$row = $query_admin->row();
		return $row;
		
	}
	
	public function getPassword($username)
	{
		// should use getUserInfo
		$type = $this->userTypeIdentifier($username);
		$table = ($this->isAdmin($type))?$this->table_admin:$this->table_employee;
		$query	= $this->db->get_where($table, array($table.'_username' => $username));
		$row = $query->row();
		$password = ($this->isAdmin($type))?$row->admin_password:$row->employee_password;
		return $password;	
	}
	
	public function validateCredentials()
	{	
	    $post_username = $this->input->post('username');
		$post_password = $this->input->post('password');
		$return_row = null;
		$table = null;
		$type = null;
		
		if($this->checkUsernameValidity()){
			$type = $this->userTypeIdentifier($post_username);
			$table = ($this->isAdmin($type))?$this->table_admin:$this->table_employee;
			$password = $this->getPassword($post_username);
			if($password === $post_password){
				$return_row = $this->db->get_where($table, array($table.'_username' => $post_username));
			}			
		}
		$ret_array = array(	'row' => $return_row,
							'type' => $type);
		return $ret_array;			 
		
	}
	
	/** username belonging to deleted/inactive employee is considered invalid 
	 ** modified by CAE 11/29
	 **/
	public function checkUsernameValidity()
	{
		$post_username = $this->input->post('username');
		$query_admin = $this->db->get_where('admin', array('admin_username' => $post_username));
		$row_admin = $query_admin->row();
		$query_employee = $this->db->get_where('employee', array(	'employee_username' => $post_username, 
																	'employee_status' => 1));
		$row_employee = $query_employee->row();
		return (!empty($row_admin) || !empty($row_employee))?true:false;
	}
	
	public function checkIPValidity($ip_address)
	{
		$query_admin = $this->db->get_where('admin', array('admin_ip_address' => $ip_address));
		$row_admin = $query_admin->row();
		$query_employee = $this->db->get_where('employee', array('employee_ip_address' => $ip_address));
		$row_employee = $query_employee->row();
		$row_employee = $query_employee->row();
		return (!empty($row_admin) || !empty($row_employee))?true:false;
	}
	
}
?>